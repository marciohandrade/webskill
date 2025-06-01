import { useState } from 'react';
import axios from 'axios';

function Chatbot() {
  const [setor, setSetor] = useState('');
  const [resposta, setResposta] = useState('');

  const enviar = async () => {
    const res = await axios.post('http://localhost:8000/api/resposta', { setor });
    setResposta(res.data.resposta);
  };

  return (
    <div className="chat">
      <h2>Atendimento Inteligente</h2>
      <input
        type="text"
        placeholder="Digite o setor (ex: saúde, beleza...)"
        value={setor}
        onChange={(e) => setSetor(e.target.value)}
      />
      <button onClick={enviar}>Enviar</button>
      {resposta && <p><strong>Resposta:</strong> {resposta}</p>}
    </div>
  );
}

export default Chatbot;
