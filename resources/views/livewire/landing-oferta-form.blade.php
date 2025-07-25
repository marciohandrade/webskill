<div>
    @if($success_message)
        <div style="background: #28a745; color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center; animation: slideIn 0.5s ease;">
            <strong>✅ {{ $success_message }}</strong>
        </div>
    @endif

    @if (session()->has('error'))
        <div style="background: #dc3545; color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center;">
            <strong>❌ {{ session('error') }}</strong>
        </div>
    @endif

    <form wire:submit="submitForm" style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 15px;">
        {{-- Campo Nome --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Nome Completo*</label>
            <input 
                type="text" 
                wire:model="nome" 
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('nome') border-color: #dc3545; @enderror" 
                placeholder="Digite seu nome"
                maxlength="100"
                wire:loading.attr="disabled"
            >
            @error('nome') 
                <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span> 
            @enderror
        </div>

        {{-- Campo WhatsApp --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">WhatsApp (mais importante)*</label>
            <input 
                type="tel" 
                wire:model="whatsapp" 
                id="whatsapp-input"
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('whatsapp') border-color: #dc3545; @enderror" 
                placeholder="(11) 99999-9999"
                maxlength="15"
                wire:loading.attr="disabled"
                oninput="formatPhoneNumber(this)"
                onkeypress="return isNumberKey(event)"
            >
            @error('whatsapp') 
                <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span> 
            @enderror
        </div>

        {{-- Campo Email --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">E-mail*</label>
            <input 
                type="email" 
                wire:model="email" 
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('email') border-color: #dc3545; @enderror" 
                placeholder="seu@email.com"
                maxlength="255"
                wire:loading.attr="disabled"
            >
            @error('email') 
                <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span> 
            @enderror
        </div>

        {{-- Campo Estabelecimento --}}
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Nome do Seu Estabelecimento*</label>
            <input 
                type="text" 
                wire:model="estabelecimento" 
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('estabelecimento') border-color: #dc3545; @enderror" 
                placeholder="Ex: Studio Bella Hair"
                maxlength="150"
                wire:loading.attr="disabled"
            >
            @error('estabelecimento') 
                <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span> 
            @enderror
        </div>

        {{-- Campo Volume de Agendamentos --}}
        <div style="margin-bottom: 30px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; color: white;">Quantos agendamentos por semana?*</label>
            <select 
                wire:model="agendamentos_semana" 
                style="width: 100%; padding: 15px; border: 2px solid rgba(255,255,255,0.3); border-radius: 10px; background: rgba(255,255,255,0.1); color: white; font-size: 16px; box-sizing: border-box; @error('agendamentos_semana') border-color: #dc3545; @enderror"
                wire:loading.attr="disabled"
            >
                <option value="" style="background: #333; color: white;">Selecione...</option>
                <option value="0-20" style="background: #333; color: white;">0 a 20 agendamentos</option>
                <option value="21-50" style="background: #333; color: white;">21 a 50 agendamentos</option>
                <option value="51-100" style="background: #333; color: white;">51 a 100 agendamentos</option>
                <option value="100+" style="background: #333; color: white;">Mais de 100 agendamentos</option>
            </select>
            @error('agendamentos_semana') 
                <span style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span> 
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