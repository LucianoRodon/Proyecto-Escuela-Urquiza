import React, { useEffect } from 'react';
import { Route, Routes, useLocation } from 'react-router-dom';
// import Home from '../Components/Home';
// import Carreras from '../Views/LandingView/Carreras';
// import Inscripciones from '../Views/LandingView/Inscripciones';
// import SuperAdmin from '../Views/SuperAdminView/SuperAdmin';
// import AlumnoProfile from '../Views/AlumnoView/Profile';
// import InscripcionesAlumno from '../Views/AlumnoView/InscripcionesAlumno';
// import Materias from '../Views/AlumnoView/Materias';
// import Error404 from '../Views/Error404';
// import LandingView from '../Views/LandingView';
// import AlumnoView from '../Views/AlumnoView';
// import SuperAdminView from '../Views/SuperAdminView';
// import SignUp from '../Views/LandingView/SignUp';
// import RecoverPassword from '../Views/LandingView/Login/RecoverPassword';
// import ResetPassword from '../Views/LandingView/Login/ResetPassword';
// import Login from '../Views/LandingView/Login';

import Base from '../horarios/Screens/layouts/base';
import Home from '../horarios/Screens/home';
import Aulas from '../horarios/Screens/aula';
import CrearAula from '../horarios/Screens/aula/crearAula';
import ActualizarAula from '../horarios/Screens/aula/actualizarAula';
import Materias from '../horarios/Screens/materia';
import CrearMateria from '../horarios/Screens/materia/crearMateria';
import ActualizarMateria from '../horarios/Screens/materia/actualizarMateria';
import Comisiones from '../horarios/Screens/comision';
import CrearComision from '../horarios/Screens/comision/crearComision';
import ActualizarComision from '../horarios/Screens/comision/actualizarComision';
import Asignaciones from '../horarios/Screens/asignacion';
import CrearHorarioPrevio from '../horarios/Screens/horarioPrevioDocente/crearHorarioPrevio';
import ActualizarHorarioPrevio from '../horarios/Screens/horarioPrevioDocente/actualizarHorarioPrevioDocente';

// ... rest of the code
const RoutesLanding = () => {
  const { pathname } = useLocation();

  useEffect(() => {
    window.scrollTo(0, 0);
  }, [pathname]);

  return (
    <Routes>
      {/* <Route path="/" element={<LandingView />}>
        <Route index element={<Home />} />
        <Route path="/signup" element={<SignUp />} />
        <Route path="/login" element={<Login />} />
        <Route path="/recover-password" element={<RecoverPassword />} />
        <Route path="/reset-password/:token" element={<ResetPassword />} />
        <Route path="/carreras" element={<Carreras />} />
        <Route path="/inscripciones" element={<Inscripciones />} />
      </Route>

      <Route path="/alumno" element={<AlumnoView />}>
        <Route index element={<Home />} />
        <Route path="profile/:id" element={<AlumnoProfile />} />
        <Route path="materias" element={<Materias />} />
        <Route path="inscripciones" element={<InscripcionesAlumno />} />
      </Route>

      <Route path="/super-admin" element={<SuperAdminView />}>
        <Route index element={<Home />} />
        <Route path="administracion" element={<SuperAdmin />} />
        <Route path="carreras" element={<Carreras />} />
        <Route path="inscripciones" element={<Inscripciones />} />
      </Route> */}

      {/* <Route path="*" element={<Error404 />} /> */}

      {/*horarios  */}
      <Route path="/horarios" element={<Base hideMenu={false} />}>
        <Route index element={<Home />} />
        {/* aulas */}
        <Route path="aulas" element={<Aulas />} />
        <Route path="aulas/crear" element={<CrearAula />} />
        <Route path="aulas/:aulaId/actualizar" element={<ActualizarAula />} />
        {/* materias */}
        <Route path="materias" element={<Materias />} />
        <Route path="materias/crear" element={<CrearMateria />} />
        <Route path="materias/:materiaId/actualizar" element={<ActualizarMateria />} />
        {/* comisiones */}
        <Route path="comisiones" element={<Comisiones />} />
        <Route path="comisiones/crear" element={<CrearComision />} />
        <Route path="comisiones/:comisionId/actualizar" element={<ActualizarComision />} />
        {/* asignaciones */}
        <Route path="asignaciones" element={<Asignaciones />} />
        {/* horario previo docente */}
        <Route path="crear-horario-previo/:dni" element={<CrearHorarioPrevio />} />
        <Route
          path="actualizar-horario-previo/:hpdId/:dmId"
          element={<ActualizarHorarioPrevio />}
        />
        {/*  */}
      </Route>
    </Routes>
  );
};

export default RoutesLanding;
