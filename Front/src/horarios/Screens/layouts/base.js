// import React, { useEffect } from 'react';
import { Outlet } from 'react-router-dom'; // Importa Outlet y useNavigate
// import { useNavigate } from 'react-router-dom'; // Si usas React Router para manejo de rutas
import Menu from './parcials/menu'; // Componente de menú
import 'bootstrap/dist/css/bootstrap.min.css';
import '../../css/index.css';
import '../../css/notificacion.css';
import { useEffect } from 'react';

// Componente principal
const Base = ({ hideMenu }) => {
  // const navigate = useNavigate(); // Manejo de rutas con React Router

  useEffect(() => {
    sessionStorage.setItem('userType', 'admin');
  });

  // useEffect(() => {
  //   // Redirige si no hay userType
  //   if (!sessionStorage.getItem('userType')) {
  //     navigate('/logout');
  //   }

  //   // Eliminar mensajes después de un segundo
  //   const timer = setTimeout(() => {
  //     const errorMessages = document.querySelectorAll('.alert-danger');
  //     errorMessages.forEach((message) => {
  //       message.parentElement.classList.add('hide-messages');
  //       setTimeout(() => {
  //         message.remove();
  //       }, 3500);
  //     });

  //     const successMessages = document.querySelectorAll('.alert-success');
  //     successMessages.forEach((message) => {
  //       message.parentElement.classList.add('hide-messages');
  //       setTimeout(() => {
  //         message.remove();
  //       }, 3500);
  //     });
  //   }, 3500);

  //   return () => clearTimeout(timer); // Limpiar el timer al desmontar el componente
  // }, [navigate]);

  return (
    <div>
      {!hideMenu && <Menu />} {/* Muestra el menú si hideMenu no está definido */}
      <Outlet /> {/* renderiza las rutas hijas, */}
    </div>
  );
};

export default Base;
