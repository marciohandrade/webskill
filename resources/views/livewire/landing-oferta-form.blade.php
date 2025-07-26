<div>
    {{-- POPUP DE SUCESSO - VERSÃO CORRIGIDA --}}
    @if($success_message)
        <div id="success-popup" class="popup-overlay" style="
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0,0,0,0.8); 
            z-index: 10000; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        ">
            <div class="popup-content" style="
                background: linear-gradient(135deg, #28a745, #20c997);
                color: white;
                padding: 25px 20px;
                border-radius: 15px;
                max-width: 450px;
                margin: 20px;
                text-align: center;
                box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                border: 3px solid #fff;
                position: relative;
                animation: slideInScale 0.4s ease-out;
            ">
                <!-- Botão Fechar Manual -->
                <button onclick="closeSuccessPopup()" style="
                    position: absolute;
                    top: 15px;
                    right: 20px;
                    background: rgba(255,255,255,0.2);
                    border: none;
                    color: white;
                    font-size: 24px;
                    font-weight: bold;
                    width: 35px;
                    height: 35px;
                    border-radius: 50%;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                " onmouseover="this.style.background='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                    ×
                </button>

                <!-- Ícone de Sucesso -->
                <div style="
                    width: 60px;
                    height: 60px;
                    background: rgba(255,255,255,0.2);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 15px;
                    font-size: 30px;
                    animation: bounce 0.6s ease-out;
                ">
                    ✅
                </div>

                <!-- Título -->
                <h2 style="
                    font-size: 24px;
                    font-weight: 800;
                    margin-bottom: 15px;
                    line-height: 1.2;
                ">
                    🎉 Vaga Garantida!
                </h2>

                <!-- Mensagem Principal -->
                <p style="
                    font-size: 16px;
                    line-height: 1.5;
                    margin-bottom: 20px;
                    opacity: 0.95;
                ">
                    {{ $success_message }}
                </p>

                <!-- Informações Extras -->
                <div style="
                    background: rgba(255,255,255,0.15);
                    padding: 15px;
                    border-radius: 10px;
                    margin-bottom: 20px;
                ">
                    <p style="
                        font-size: 14px;
                        margin-bottom: 8px;
                        font-weight: 600;
                    ">
                        📱 Próximos Passos:
                    </p>
                    <ul style="
                        text-align: left;
                        font-size: 13px;
                        line-height: 1.4;
                        margin: 0;
                        padding-left: 18px;
                    ">
                        <li>Aguarde meu contato via WhatsApp</li>
                        <li>Prepare suas dúvidas sobre o sistema</li>
                        <li>Tenha em mãos info do seu salão</li>
                    </ul>
                </div>
                
                <!-- Botão Fechar -->
                <button onclick="closeSuccessPopup()" style="
                    background: rgba(255,255,255,0.2);
                    color: white;
                    border: 2px solid white;
                    padding: 12px 30px;
                    border-radius: 25px;
                    font-size: 16px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.3s ease;
                " onmouseover="this.style.background='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                    Entendi, Obrigado! 👍
                </button>
            </div>
        </div>

        <style>
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideInScale {
                from { 
                    transform: translateY(-50px) scale(0.8); 
                    opacity: 0; 
                }
                to { 
                    transform: translateY(0) scale(1); 
                    opacity: 1; 
                }
            }

            @keyframes bounce {
                0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
                40% { transform: translateY(-10px); }
                60% { transform: translateY(-5px); }
            }

            @keyframes pulse {
                0% { transform: scale(1); opacity: 1; }
                50% { transform: scale(1.1); opacity: 0.8; }
                100% { transform: scale(1); opacity: 1; }
            }

            @keyframes fadeOut {
                from { opacity: 1; }
                to { opacity: 0; }
            }

            @keyframes slideOutScale {
                from { 
                    transform: translateY(0) scale(1); 
                    opacity: 1; 
                }
                to { 
                    transform: translateY(-50px) scale(0.8); 
                    opacity: 0; 
                }
            }

            /* Classe para transformar em Toast no Desktop */
            @media (min-width: 769px) {
                .popup-overlay.toast-mode {
                    background: transparent !important;
                    align-items: flex-start !important;
                    justify-content: flex-end !important;
                    padding: 20px !important;
                }

                .popup-overlay.toast-mode .popup-content {
                    max-width: 400px !important;
                    margin: 0 !important;
                    animation: slideInFromRight 0.4s ease-out !important;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3) !important;
                }

                @keyframes slideInFromRight {
                    from { 
                        transform: translateX(420px); 
                        opacity: 0; 
                    }
                    to { 
                        transform: translateX(0); 
                        opacity: 1; 
                    }
                }

                .popup-overlay.toast-mode.closing .popup-content {
                    animation: slideOutToRight 0.4s ease-out forwards !important;
                }

                @keyframes slideOutToRight {
                    from { 
                        transform: translateX(0); 
                        opacity: 1; 
                    }
                    to { 
                        transform: translateX(420px); 
                        opacity: 0; 
                    }
                }
            }

            /* Manter modal no Mobile */
            @media (max-width: 768px) {
                .popup-content {
                    margin: 10px !important;
                    padding: 20px 15px !important;
                    max-width: 350px !important;
                }
            }

            .popup-overlay.closing {
                animation: fadeOut 0.4s ease-out forwards;
            }

            .popup-overlay.closing .popup-content {
                animation: slideOutScale 0.4s ease-out forwards;
            }
        </style>
    @endif

    <!-- MENSAGENS DE ERRO -->
    @if (session()->has('error'))
        <div style="background: #dc3545; color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center;">
            <strong>❌ {{ session('error') }}</strong>
        </div>
    @endif

    <form wire:submit.prevent="submitForm" style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 15px;">
        
        {{-- Campo Nome --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Nome Completo*</label>
            <input
                type="text"
                wire:model="nome"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('nome') border-color: #ff4444 !important; @enderror"
                placeholder="Digite seu nome"
                maxlength="100"
                wire:loading.attr="disabled"
            >
            @error('nome')
                <div style="background: #ff4444; color: white; padding: 10px; border-radius: 5px; margin-top: 8px; font-size: 14px; font-weight: 600; border: 2px solid white; animation: shake 0.5s;">
                    ⚠️ {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Campo Email --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">E-mail*</label>
            <input
                type="email"
                wire:model="email"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('email') border-color: #ff4444 !important; @enderror"
                placeholder="seu@email.com"
                maxlength="255"
                wire:loading.attr="disabled"
            >
            @error('email')
                <div style="background: #ff4444; color: white; padding: 10px; border-radius: 5px; margin-top: 8px; font-size: 14px; font-weight: 600; border: 2px solid white; animation: shake 0.5s;">
                    ⚠️ {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Campo WhatsApp --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">WhatsApp (mais importante)*</label>
            <input
                type="tel"
                wire:model="whatsapp"
                id="whatsapp-input"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('whatsapp') border-color: #ff4444 !important; @enderror"
                placeholder="(11) 99999-9999"
                maxlength="15"
                wire:loading.attr="disabled"
                oninput="formatPhoneNumber(this)"
                onkeypress="return isNumberKey(event)"
            >
            @error('whatsapp')
                <div style="background: #ff4444; color: white; padding: 10px; border-radius: 5px; margin-top: 8px; font-size: 14px; font-weight: 600; border: 2px solid white; animation: shake 0.5s;">
                    ⚠️ {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Campo Estabelecimento --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Nome do Seu Estabelecimento*</label>
            <input
                type="text"
                wire:model="estabelecimento"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('estabelecimento') border-color: #ff4444 !important; @enderror"
                placeholder="Ex: Studio Bella Hair"
                maxlength="150"
                wire:loading.attr="disabled"
            >
            @error('estabelecimento')
                <div style="background: #ff4444; color: white; padding: 10px; border-radius: 5px; margin-top: 8px; font-size: 14px; font-weight: 600; border: 2px solid white; animation: shake 0.5s;">
                    ⚠️ {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Campo Volume de Agendamentos --}}
        <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Quantos agendamentos por semana?*</label>
            <select
                wire:model="agendamentos_semana"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('agendamentos_semana') border-color: #ff4444 !important; @enderror"
                wire:loading.attr="disabled"
            >
                <option value="" style="background: #333; color: white;">Selecione...</option>
                <option value="0-20" style="background: #333; color: white;">0 a 20 agendamentos</option>
                <option value="21-50" style="background: #333; color: white;">21 a 50 agendamentos</option>
                <option value="51-100" style="background: #333; color: white;">51 a 100 agendamentos</option>
                <option value="100+" style="background: #333; color: white;">Mais de 100 agendamentos</option>
            </select>
            @error('agendamentos_semana')
                <div style="background: #ff4444; color: white; padding: 10px; border-radius: 5px; margin-top: 8px; font-size: 14px; font-weight: 600; border: 2px solid white; animation: shake 0.5s;">
                    ⚠️ {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Botão Submit --}}
        <button
            type="submit"
            style="width: 100%; background: #ff6b35; color: white; padding: 18px; border: none; border-radius: 10px; font-size: 18px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;"
            wire:loading.attr="disabled"
            onmouseover="this.style.background='#e55a2b'"
            onmouseout="this.style.background='#ff6b35'"
        >
            <span wire:loading.remove>
                CONFIRMAR MINHA VAGA DA OFERTA DE LANÇAMENTO
            </span>
            <span wire:loading>
                ⏳ PROCESSANDO...
            </span>
        </button>

        {{-- Informações adicionais --}}
        <p style="font-size: 14px; opacity: 0.8; margin-top: 20px; text-align: center;">
            🔒 Seus dados estão seguros • 🛡️ Garantia 30 dias • ⚡ Resposta em até 2 horas
        </p>

        {{-- Contador de vagas dinâmico --}}
        <div style="text-align: center; margin-top: 15px; color: #ff6b35; font-weight: 600;">
            ⏰ Restam apenas <span style="font-size: 18px; font-weight: 800;">{{ $vagas_restantes }}</span> vagas desta oferta
        </div>
    </form>

    <style>
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        input:focus, select:focus {
            outline: none !important;
            border-color: #ff6b35 !important;
            background: rgba(255,255,255,0.15) !important;
        }

        input::placeholder {
            color: rgba(255,255,255,0.7) !important;
        }

        button:disabled {
            opacity: 0.7 !important;
            cursor: not-allowed !important;
        }
    </style>
</div>