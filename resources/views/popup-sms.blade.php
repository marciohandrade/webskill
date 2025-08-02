<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação SMS - Web Skill</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            padding: 20px;
        }

        /* =================================================================
           🔥 SMS POPUP OVERLAY & CONTAINER
        ================================================================= */
        .sms-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            opacity: 0;
            animation: fadeIn 0.4s ease forwards;
        }

        .sms-overlay.closing {
            animation: fadeOut 0.4s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        .sms-popup {
            background: white;
            border-radius: 25px;
            padding: 50px 40px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: 0 30px 80px rgba(0,0,0,0.3);
            transform: translateY(50px);
            animation: slideUp 0.5s ease forwards;
            position: relative;
            border: 3px solid #ff6b35;
        }

        .sms-popup.closing {
            animation: slideDown 0.4s ease forwards;
        }

        @keyframes slideUp {
            from { 
                transform: translateY(50px);
                opacity: 0;
            }
            to { 
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from { 
                transform: translateY(0);
                opacity: 1;
            }
            to { 
                transform: translateY(50px);
                opacity: 0;
            }
        }

        /* =================================================================
           📱 SMS POPUP CONTENT
        ================================================================= */
        .sms-icon {
            font-size: 64px;
            margin-bottom: 25px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        .sms-title {
            font-size: 28px;
            font-weight: 800;
            color: #000;
            margin-bottom: 15px;
        }

        .sms-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .phone-highlight {
            color: #ff6b35;
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 30px;
            display: block;
        }

        /* =================================================================
           🔢 CODE INPUT FIELDS
        ================================================================= */
        .code-input-container {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin: 30px 0;
        }

        .code-digit {
            width: 60px;
            height: 60px;
            border: 3px solid #e0e0e0;
            border-radius: 12px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            background: #f8f9fa;
            transition: all 0.3s ease;
            outline: none;
        }

        .code-digit:focus {
            border-color: #ff6b35;
            background: white;
            box-shadow: 0 0 0 3px rgba(255,107,53,0.2);
            transform: scale(1.05);
        }

        .code-digit.filled {
            background: #ff6b35;
            color: white;
            border-color: #ff6b35;
        }

        .code-digit.error {
            border-color: #dc3545;
            background: #ffe6e6;
            animation: shake 0.5s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        /* =================================================================
           ⏱️ TIMER & RESEND
        ================================================================= */
        .timer-section {
            margin: 25px 0;
            padding: 20px;
            background: rgba(255,107,53,0.1);
            border-radius: 15px;
            border: 1px solid rgba(255,107,53,0.3);
        }

        .timer-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .timer-display {
            font-size: 20px;
            font-weight: 800;
            color: #ff6b35;
            margin-bottom: 15px;
        }

        .resend-button {
            background: transparent;
            border: 2px solid #ff6b35;
            color: #ff6b35;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .resend-button:hover:not(:disabled) {
            background: #ff6b35;
            color: white;
            transform: translateY(-2px);
        }

        .resend-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* =================================================================
           ✅ SUCCESS & ERROR STATES
        ================================================================= */
        .success-message {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            display: none;
            animation: successPulse 0.6s ease;
        }

        .success-message.show {
            display: block;
        }

        @keyframes successPulse {
            0% { transform: scale(0.9); opacity: 0; }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); opacity: 1; }
        }

        .error-message {
            background: linear-gradient(135deg, #dc3545, #c82333);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
            display: none;
            font-size: 14px;
        }

        .error-message.show {
            display: block;
            animation: errorShake 0.5s ease;
        }

        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        /* =================================================================
           🔘 ACTION BUTTONS
        ================================================================= */
        .popup-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            justify-content: center;
        }

        .verify-button {
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
            flex: 1;
            max-width: 200px;
        }

        .verify-button:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255,107,53,0.4);
        }

        .verify-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .cancel-button {
            background: transparent;
            color: #666;
            border: 2px solid #ddd;
            padding: 18px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cancel-button:hover {
            border-color: #ff6b35;
            color: #ff6b35;
            transform: translateY(-2px);
        }

        /* =================================================================
           📱 MOBILE RESPONSIVO
        ================================================================= */
        @media (max-width: 768px) {
            .sms-popup {
                margin: 20px;
                padding: 40px 25px;
                max-width: none;
                width: calc(100% - 40px);
            }

            .sms-title {
                font-size: 24px;
            }

            .sms-subtitle {
                font-size: 15px;
            }

            .code-digit {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .code-input-container {
                gap: 8px;
            }

            .popup-actions {
                flex-direction: column;
                gap: 12px;
            }

            .verify-button,
            .cancel-button {
                max-width: none;
                width: 100%;
            }

            .timer-display {
                font-size: 18px;
            }

            .phone-highlight {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .sms-popup {
                margin: 10px;
                padding: 30px 20px;
                width: calc(100% - 20px);
            }

            .sms-icon {
                font-size: 48px;
            }

            .sms-title {
                font-size: 22px;
            }

            .code-digit {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }

            .code-input-container {
                gap: 6px;
            }
        }

        /* =================================================================
           🎨 LOADING STATE
        ================================================================= */
        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 10px;
        }

        .verify-button.loading .loading-spinner {
            display: inline-block;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Demo styling for this preview */
        .demo-container {
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .demo-title {
            font-size: 32px;
            font-weight: 800;
            color: #000;
            margin-bottom: 20px;
        }

        .demo-button {
            background: #ff6b35;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .demo-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,107,53,0.3);
        }
    </style>
</head>
<body>
    <!-- DEMO CONTAINER -->
    <div class="demo-container">
        <h1 class="demo-title">🔥 Popup de Confirmação SMS</h1>
        <p style="color: #666; margin-bottom: 30px;">
            Clique no botão abaixo para testar o popup de confirmação SMS
        </p>
        <button class="demo-button" onclick="showSMSPopup('(11) 99999-9999')">
            📱 Simular Envio SMS
        </button>
        <button class="demo-button" onclick="showSMSPopup('(11) 99999-9999', true)">
            ❌ Simular Erro de Código
        </button>
    </div>

    <!-- SMS CONFIRMATION POPUP -->
    <div class="sms-overlay" id="sms-overlay" style="display: none;">
        <div class="sms-popup" id="sms-popup">
            <div class="sms-icon">📱</div>
            
            <h2 class="sms-title">Confirme seu WhatsApp</h2>
            <p class="sms-subtitle">
                Enviamos um código de confirmação via SMS para:
            </p>
            <span class="phone-highlight" id="phone-display">(11) 99999-9999</span>

            <div class="code-input-container">
                <input type="text" class="code-digit" maxlength="1" id="digit-1">
                <input type="text" class="code-digit" maxlength="1" id="digit-2">
                <input type="text" class="code-digit" maxlength="1" id="digit-3">
                <input type="text" class="code-digit" maxlength="1" id="digit-4">
                <input type="text" class="code-digit" maxlength="1" id="digit-5">
                <input type="text" class="code-digit" maxlength="1" id="digit-6">
            </div>

            <div class="timer-section">
                <div class="timer-text">Código expira em:</div>
                <div class="timer-display" id="timer-display">05:00</div>
                <button class="resend-button" id="resend-button" onclick="resendCode()" disabled>
                    📩 Reenviar Código
                </button>
            </div>

            <div class="success-message" id="success-message">
                <strong>✅ Código verificado com sucesso!</strong><br>
                Redirecionando para próxima etapa...
            </div>

            <div class="error-message" id="error-message">
                ❌ Código inválido. Verifique e tente novamente.
            </div>

            <div class="popup-actions">
                <button class="verify-button" id="verify-button" onclick="verifyCode()">
                    <span class="loading-spinner"></span>
                    <span class="button-text">Verificar Código</span>
                </button>
                <button class="cancel-button" onclick="closeSMSPopup()">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

    <script>
        // =================================================================
        // 📱 SMS POPUP SYSTEM - VERSÃO COMPLETA
        // =================================================================
        
        let timerInterval;
        let timeLeft = 300; // 5 minutos em segundos
        let demoErrorMode = false;

        // =================================================================
        // 🚀 INICIALIZAÇÃO DO POPUP
        // =================================================================
        function showSMSPopup(phoneNumber, errorMode = false) {
            console.log('📱 SMS POPUP - Iniciando...', phoneNumber);
            
            demoErrorMode = errorMode;
            
            // Atualizar número de telefone
            document.getElementById('phone-display').textContent = phoneNumber;
            
            // Resetar estado
            resetPopupState();
            
            // Mostrar popup
            const overlay = document.getElementById('sms-overlay');
            overlay.style.display = 'flex';
            
            // Focar no primeiro campo
            setTimeout(() => {
                document.getElementById('digit-1').focus();
            }, 500);
            
            // Iniciar timer
            startTimer();
            
            console.log('✅ SMS POPUP - Exibido com sucesso');
        }

        function resetPopupState() {
            // Limpar todos os campos
            for (let i = 1; i <= 6; i++) {
                const input = document.getElementById(`digit-${i}`);
                input.value = '';
                input.classList.remove('filled', 'error');
            }
            
            // Resetar mensagens
            document.getElementById('success-message').classList.remove('show');
            document.getElementById('error-message').classList.remove('show');
            
            // Resetar botão
            const verifyBtn = document.getElementById('verify-button');
            verifyBtn.classList.remove('loading');
            verifyBtn.disabled = false;
            
            // Resetar timer
            timeLeft = 300;
            updateTimerDisplay();
        }

        // =================================================================
        // ⏱️ TIMER SYSTEM
        // =================================================================
        function startTimer() {
            clearInterval(timerInterval);
            
            timerInterval = setInterval(() => {
                timeLeft--;
                updateTimerDisplay();
                
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    enableResendButton();
                }
            }, 1000);
        }

        function updateTimerDisplay() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            const display = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            
            document.getElementById('timer-display').textContent = display;
            
            // Mudança de cor quando restam poucos segundos
            const timerDisplay = document.getElementById('timer-display');
            if (timeLeft <= 30) {
                timerDisplay.style.color = '#dc3545';
                timerDisplay.style.animation = 'pulse 1s infinite';
            }
        }

        function enableResendButton() {
            const resendBtn = document.getElementById('resend-button');
            resendBtn.disabled = false;
            resendBtn.textContent = '📩 Reenviar Código';
        }

        function resendCode() {
            console.log('📩 Reenviando código SMS...');
            
            // Resetar timer
            timeLeft = 300;
            startTimer();
            
            // Desabilitar botão novamente
            const resendBtn = document.getElementById('resend-button');
            resendBtn.disabled = true;
            resendBtn.textContent = '📩 Código Enviado!';
            
            // Feedback visual
            resendBtn.style.background = '#28a745';
            resendBtn.style.color = 'white';
            resendBtn.style.borderColor = '#28a745';
            
            setTimeout(() => {
                resendBtn.style.background = 'transparent';
                resendBtn.style.color = '#ff6b35';
                resendBtn.style.borderColor = '#ff6b35';
            }, 2000);
            
            // Limpar campos
            for (let i = 1; i <= 6; i++) {
                const input = document.getElementById(`digit-${i}`);
                input.value = '';
                input.classList.remove('filled', error');
            }
            
            document.getElementById('digit-1').focus();
        }

        // =================================================================
        // 🔢 CODE INPUT HANDLING
        // =================================================================
        document.addEventListener('DOMContentLoaded', function() {
            setupCodeInputs();
        });

        function setupCodeInputs() {
            for (let i = 1; i <= 6; i++) {
                const input = document.getElementById(`digit-${i}`);
                
                input.addEventListener('input', function(e) {
                    handleCodeInput(e, i);
                });
                
                input.addEventListener('keydown', function(e) {
                    handleKeydown(e, i);
                });
                
                input.addEventListener('paste', function(e) {
                    handlePaste(e);
                });
            }
        }

        function handleCodeInput(e, position) {
            const input = e.target;
            let value = input.value;
            
            // Apenas números
            value = value.replace(/[^0-9]/g, '');
            
            if (value.length > 1) {
                value = value.charAt(0);
            }
            
            input.value = value;
            
            // Adicionar classe visual
            if (value) {
                input.classList.add('filled');
                input.classList.remove('error');
                
                // Mover para o próximo campo
                if (position < 6) {
                    document.getElementById(`digit-${position + 1}`).focus();
                }
            } else {
                input.classList.remove('filled');
            }
            
            // Verificar se todos os campos estão preenchidos
            checkAutoVerify();
        }

        function handleKeydown(e, position) {
            // Backspace - voltar para campo anterior
            if (e.key === 'Backspace' && !e.target.value && position > 1) {
                document.getElementById(`digit-${position - 1}`).focus();
            }
            
            // Enter - verificar código
            if (e.key === 'Enter') {
                verifyCode();
            }
            
            // Setas para navegação
            if (e.key === 'ArrowLeft' && position > 1) {
                e.preventDefault();
                document.getElementById(`digit-${position - 1}`).focus();
            }
            
            if (e.key === 'ArrowRight' && position < 6) {
                e.preventDefault();
                document.getElementById(`digit-${position + 1}`).focus();
            }
        }

        function handlePaste(e) {
            e.preventDefault();
            
            const paste = (e.clipboardData || window.clipboardData).getData('text');
            const code = paste.replace(/[^0-9]/g, '').substring(0, 6);
            
            for (let i = 0; i < code.length && i < 6; i++) {
                const input = document.getElementById(`digit-${i + 1}`);
                input.value = code[i];
                input.classList.add('filled');
                input.classList.remove('error');
            }
            
            // Focar no último campo preenchido ou próximo vazio
            const nextEmptyIndex = Math.min(code.length + 1, 6);
            document.getElementById(`digit-${nextEmptyIndex}`).focus();
            
            // Auto-verificar se código completo
            if (code.length === 6) {
                setTimeout(verifyCode, 300);
            }
        }

        function checkAutoVerify() {
            const code = getEnteredCode();
            if (code.length === 6) {
                setTimeout(verifyCode, 500); // Auto-verificar após pequeno delay
            }
        }

        function getEnteredCode() {
            let code = '';
            for (let i = 1; i <= 6; i++) {
                code += document.getElementById(`digit-${i}`).value;
            }
            return code;
        }

        // =================================================================
        // ✅ VERIFICAÇÃO DO CÓDIGO
        // =================================================================
        function verifyCode() {
            const code = getEnteredCode();
            
            if (code.length !== 6) {
                showError('Por favor, digite o código completo de 6 dígitos.');
                return;
            }
            
            console.log('🔍 Verificando código:', code);
            
            // Loading state
            const verifyBtn = document.getElementById('verify-button');
            verifyBtn.classList.add('loading');
            verifyBtn.disabled = true;
            
            // Simular verificação no servidor
            setTimeout(() => {
                verifyBtn.classList.remove('loading');
                verifyBtn.disabled = false;
                
                // DEMO: Código correto é "123456", ou modo erro ativo
                if (demoErrorMode || code !== '123456') {
                    showError('Código inválido. Verifique e tente novamente.');
                    markCodeAsError();
                } else {
                    showSuccess();
                }
            }, 1500);
        }

        function showError(message) {
            const errorDiv = document.getElementById('error-message');
            errorDiv.textContent = message;
            errorDiv.classList.add('show');
            
            setTimeout(() => {
                errorDiv.classList.remove('show');
            }, 5000);
        }

        function markCodeAsError() {
            for (let i = 1; i <= 6; i++) {
                const input = document.getElementById(`digit-${i}`);
                input.classList.add('error');
                input.classList.remove('filled');
            }
            
            // Focar no primeiro campo para correção
            setTimeout(() => {
                document.getElementById('digit-1').focus();
                document.getElementById('digit-1').select();
            }, 300);
        }

        function showSuccess() {
            console.log('✅ Código verificado com sucesso!');
            
            // Mostrar mensagem de sucesso
            const successDiv = document.getElementById('success-message');
            successDiv.classList.add('show');
            
            // Ocultar timer e outros elementos
            document.querySelector('.timer-section').style.display = 'none';
            document.querySelector('.popup-actions').style.display = 'none';
            
            // Aguardar e redirecionar
            setTimeout(() => {
                console.log('🚀 Redirecionando para página de qualificação...');
                
                // AQUI VOCÊ FARIA O REDIRECIONAMENTO REAL:
                // window.location.href = '/qualificacao';
                
                // Para demo, vamos simular:
                alert('🎉 Sucesso! Redirecionando para página de qualificação...\n\n(Em produção, seria redirecionado automaticamente)');
                closeSMSPopup();
                
            }, 3000);
        }

        // =================================================================
        // 🚪 FECHAR POPUP
        // =================================================================
        function closeSMSPopup() {
            console.log('🚪 Fechando SMS popup...');
            
            const overlay = document.getElementById('sms-overlay');
            const popup = document.getElementById('sms-popup');
            
            // Animação de saída
            overlay.classList.add('closing');
            popup.classList.add('closing');
            
            // Limpar timer
            clearInterval(timerInterval);
            
            // Remover após animação
            setTimeout(() => {
                overlay.style.display = 'none';
                overlay.classList.remove('closing');
                popup.classList.remove('closing');
                
                // Reset para próximo uso
                resetPopupState();
            }, 400);
        }

        // =================================================================
        // 🎯 EVENT LISTENERS GLOBAIS
        // =================================================================
        
        // Fechar com ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const overlay = document.getElementById('sms-overlay');
                if (overlay.style.display === 'flex') {
                    closeSMSPopup();
                }
            }
        });

        // Fechar clicando fora do popup
        document.getElementById('sms-overlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSMSPopup();
            }
        });

        console.log('📱 SMS POPUP SYSTEM - Carregado e pronto!');
    </script>
</body>
</html>