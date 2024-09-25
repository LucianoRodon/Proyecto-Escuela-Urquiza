import React, { useState } from 'react';
// import React, { useState, useEffect } from 'react';

import 'bootstrap/dist/css/bootstrap.min.css'; // Asegúrate de importar Bootstrap
import '../../../css/menu.css'; // Importa tu archivo de estilos CSS

const Menu = () => {
  const [isCollapsed, setIsCollapsed] = useState(true);
  // const [buttonEnabled, setButtonEnabled] = useState(true);

  // Maneja el toggle del menú
  const handleToggle = () => {
    setIsCollapsed(!isCollapsed);

    // Lógica para animar el botón
    const botonMenu = document.getElementById('toggleButton');
    botonMenu.classList.toggle('float-right');

    // Animación de transición
    if (botonMenu.classList.contains('float-right')) {
      botonMenu.style.marginLeft = '210px';
      botonMenu.style.transition = '0.3s';

      botonMenu.disabled = false;
    } else {
      botonMenu.style.marginLeft = '0';
      botonMenu.style.transition = '0.3s';
    }
  };

  return (
    <div>
      <div className="button-container">
        <button
          id="toggleButton"
          className="btn btn-primary"
          type="button"
          aria-controls="sidebar"
          aria-expanded={!isCollapsed}
          aria-label="Toggle navigation"
          onClick={handleToggle}
        >
          <i className="fas fa-bars"></i>
        </button>
      </div>

      {/* Sidebar con transición */}
      <div className={`sidebar ${isCollapsed ? '' : 'show'}`} id="sidebar">
        <nav className="col-md-3 col-lg-2 d-md-block bg-light vh-100 navElemento">
          <div className="position-sticky cont-nav">
            <ul className="nav flex-column">
              <li className="nav-item">
                <a className="nav-link" href="/home">
                  Home
                </a>
              </li>
              {/* Condiciones para el tipo de usuario */}
              {sessionStorage.getItem('userType') === 'estudiante' && (
                <li className="nav-item">
                  <a className="nav-link" href="/horarios-estudiante">
                    Horarios
                  </a>
                </li>
              )}
              {sessionStorage.getItem('userType') === 'docente' && (
                <li className="nav-item">
                  <a className="nav-link" href="/horarios-docente">
                    Horarios
                  </a>
                </li>
              )}
              {(sessionStorage.getItem('userType') === 'bedelia' ||
                sessionStorage.getItem('userType') === 'admin') && (
                <>
                  {sessionStorage.getItem('userType') === 'admin' && (
                    <>
                      <li className="nav-item">
                        <a className="nav-link" href="/horarios-estudiante">
                          Horarios Estudiante
                        </a>
                      </li>
                      <li className="nav-item">
                        <a className="nav-link" href="/horarios-docente">
                          Horarios Docentes
                        </a>
                      </li>
                    </>
                  )}
                  <li className="nav-item">
                    <a className="nav-link" href="/horarios-bedelia">
                      Horarios Bedelia
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/aulas">
                      Aulas
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/materias">
                      Materias
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/carreras">
                      Carreras
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/comisiones">
                      Comisiones
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/usuarios">
                      Usuarios
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/docentes">
                      Docentes
                    </a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="/asignacion-docente">
                      Asignación Docente
                    </a>
                  </li>
                </>
              )}
            </ul>
            <div className="logout">
              <a className="nav-link" href="/logout">
                <button type="button" className="btn btn-danger">
                  Logout
                </button>
              </a>
            </div>
            <div className="userType">
              {sessionStorage.getItem('userType') && (
                <p style={{ color: 'red' }}>
                  Tipo de usuario: {sessionStorage.getItem('userType')}
                </p>
              )}
            </div>
          </div>
        </nav>
      </div>
    </div>
  );
};

export default Menu;
