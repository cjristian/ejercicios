
import './App.css'
const arrayTasks = [
  {
    id: 1,
    descripcion: "Completar tarea de matemáticas",
    condicion: true
  },
  {
    id: 2,
    descripcion: "Leer un capítulo del libro",
    condicion: false
  },
  {
    id: 3,
    descripcion: "Hacer ejercicio durante 30 minutos",
    condicion: false
  }
]
function RecorrerArray({ id, descripcion, condicion }) {
  return (
    <div className="tasks">
      <div className="description">
        <p>{id}</p>
        <p>{descripcion}</p>
      </div>
      <div className="botones">

        <button>Hecha</button>
        <button>Eliminar</button>
      </div>
    </div>
  )
}

function App() {
  return (
    <>
      <h1>Blog Tareas</h1>
      <hr />
      <input type="text" placeholder='Escribe la tarea que quieras hacer' />
      <button>Añadir</button>
      {arrayTasks.map(valor => {
        return (<RecorrerArray id={valor.id} descripcion={valor.descripcion} condicion={valor.condicion} />)
      })}
    </>
  )
}

export default App
