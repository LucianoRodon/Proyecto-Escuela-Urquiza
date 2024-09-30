// Definición de rutas
export const getRoutes = () => ({
  base: '/horarios',
  home: '/',
  aulas: {
    main: 'aulas',
    crear: 'aulas/crear',
    actualizar: (aulaId) => `aulas/${aulaId}/actualizar`
  },
  materias: {
    main: 'materias',
    crear: 'materias/crear',
    actualizar: (materiaId) => `materias/${materiaId}/actualizar`
  },
  carreras: {
    main: 'carreras',
    crear: 'carreras/crear',
    actualizar: (carreraId) => `carreras/${carreraId}/actualizar`
  },
  comisiones: {
    main: 'comisiones',
    crear: 'comisiones/crear',
    actualizar: (comisionId) => `comisiones/${comisionId}/actualizar`
  },
  asignaciones: 'asignaciones',
  crearHorarioPrevio: (dni) => `crear-horario-previo/${dni}`,
  actualizarHorarioPrevio: (hpdId, dmId) => `actualizar-horario-previo/${hpdId}/${dmId}`,
  planilla: {
    alumnos: 'planilla-alumnos',
    bedelia: 'planilla-bedelia',
    docente: 'planilla-docente'
  }
});
