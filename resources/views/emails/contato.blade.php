<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Novo Contato - Web Skill</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .content { background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { margin-top: 5px; padding: 10px; background: #f8f9fa; border-radius: 3px; }
        .footer { margin-top: 20px; text-align: center; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>🔔 Novo Contato Recebido</h2>
            <p>Formulário de contato enviado em {{ $data_envio }}</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">👤 Nome:</div>
                <div class="value">{{ $nome }}</div>
            </div>
            
            <div class="field">
                <div class="label">📧 E-mail:</div>
                <div class="value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="label">📱 Telefone:</div>
                <div class="value">{{ $telefone }}</div>
            </div>
            
            <div class="field">
                <div class="label">📋 Assunto:</div>
                <div class="value">{{ $assunto }}</div>
            </div>
            
            <div class="field">
                <div class="label">💬 Mensagem:</div>
                <div class="value">{{ $mensagem }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Este e-mail foi enviado automaticamente pelo formulário de contato do site Web Skill.</p>
            <p><strong>Web Skill - Soluções Digitais</strong></p>
        </div>
    </div>
</body>
</html>