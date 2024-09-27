import React, { useState } from 'react';

const ActualizarAula = ({ aulaId }) => {
  const [formData, setFormData] = useState({
    nombre: '',
    tipo_aula: ''
  });

  const [errors, setErrors] = useState({
    nombre: '',
    tipo_aula: ''
  });

  const [submitError, setSubmitError] = useState(null);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    // Reiniciar errores
    setErrors({
      nombre: '',
      tipo_aula: ''
    });
    setSubmitError(null);

    try {
      const response = await fetch(`/api/actualizarAula/${aulaId}`, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json'
        },
        body: JSON.stringify(formData)
      });

      if (!response.ok) {
        const data = await response.json();
        if (data.errors) {
          setErrors(data.errors); // Manejar errores de validación
        } else {
          setSubmitError('Ocurrió un error al actualizar el aula.');
        }
      } else {
        // Manejar el éxito de la actualización, como redirigir a otra página
        console.log('Aula actualizada con éxito');
      }
    } catch (error) {
      setSubmitError('Ocurrió un error al enviar la solicitud.');
    }
  };

  return (
    <div className="container py-3">
      <div className="row align-items-center justify-content-center">
        <div className="col-6 text-center">
          <form onSubmit={handleSubmit}>
            <label htmlFor="nombre">Ingrese el nombre</label>
            <br />
            <input type="text" name="nombre" value={formData.nombre} onChange={handleChange} />
            <br />
            <br />
            {errors.nombre && <div className="text-danger">{errors.nombre}</div>}

            <label htmlFor="tipo_aula">Ingrese el tipo de aula</label>
            <br />
            <input
              type="text"
              name="tipo_aula"
              value={formData.tipo_aula}
              onChange={handleChange}
            />
            <br />
            <br />
            {errors.tipo_aula && <div className="text-danger">{errors.tipo_aula}</div>}

            <button type="submit" className="btn btn-primary me-2">
              Actualizar
            </button>
          </form>
        </div>
      </div>

      {submitError && (
        <div className="container" style={{ width: '500px' }}>
          <div className="alert alert-danger">{submitError}</div>
        </div>
      )}
    </div>
  );
};

export default ActualizarAula;
