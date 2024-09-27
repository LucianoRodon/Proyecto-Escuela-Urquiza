import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom'; // Para redirigir después de la creación

const CrearAula = () => {
  const [nombre, setNombre] = useState('');
  const [tipoAula, setTipoAula] = useState('');
  const [errors, setErrors] = useState({});
  const navigate = useNavigate();

  // Maneja el envío del formulario
  const handleSubmit = async (e) => {
    e.preventDefault();
    setErrors({}); // Reiniciar los errores antes de la validación

    try {
      const response = await fetch('/api/aulas', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ nombre, tipo_aula: tipoAula })
      });

      if (response.ok) {
        navigate('/aulas'); // Redirigir a la lista de aulas después de crear con éxito
      } else {
        const data = await response.json();
        if (data.errors) {
          setErrors(data.errors); // Manejar errores de validación
        }
      }
    } catch (error) {
      console.error('Error creando aula:', error);
    }
  };

  return (
    <div className="container py-3">
      <div className="row align-items-center justify-content-center">
        <div className="col-6 text-center">
          <form onSubmit={handleSubmit}>
            <label htmlFor="nombre">Ingrese el nombre</label>
            <br />
            <input
              type="text"
              name="nombre"
              value={nombre}
              onChange={(e) => setNombre(e.target.value)}
            />
            <br />
            <br />
            {errors.nombre && <div className="text-danger">{errors.nombre}</div>}

            <label htmlFor="tipo_aula">Ingrese el tipo de aula</label>
            <br />
            <input
              type="text"
              name="tipo_aula"
              value={tipoAula}
              onChange={(e) => setTipoAula(e.target.value)}
            />
            <br />
            <br />
            {errors.tipo_aula && <div className="text-danger">{errors.tipo_aula}</div>}

            <button type="submit" className="btn btn-primary me-2">
              Crear
            </button>
          </form>
        </div>
      </div>

      {Object.keys(errors).length > 0 && (
        <div className="container" style={{ width: '500px' }}>
          <div className="alert alert-danger">
            <ul>
              {Object.values(errors).map((error, index) => (
                <li key={index}>{error}</li>
              ))}
            </ul>
          </div>
        </div>
      )}
    </div>
  );
};

export default CrearAula;
