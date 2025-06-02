import { useEffect, useState } from 'react'
import axios from 'axios'
import Chatbot from './components/Chatbot';

function App() {
  const [mensagem, setMensagem] = useState('Carregando...')

  useEffect(() => {
    axios.get('http://localhost:8000/api/hello')
      .then(res => setMensagem(res.data.message))
      .catch(() => setMensagem('Erro ao conectar com Laravel'))
  }, [])

  

  return (
    
    <div style={{ padding: 20 }}>
      <h1>Integração React + Laravel</h1>
      <p>{mensagem}</p>

      {/* Renderiza o componente do chatbot */}
    <Chatbot />
    
    </div>
  )
}

export default App
