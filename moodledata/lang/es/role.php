<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'es', version '4.1'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Agregando nuevo rol';
$string['addrole'] = 'Añadir un nuevo rol';
$string['advancedoverride'] = 'Anulación de rol avanzada';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir asignar roles';
$string['allowed'] = 'Permitido';
$string['allowoverride'] = 'Permitir sobrescribir roles';
$string['allowroletoassign'] = 'Permitir a los usuarios con el rol {$a->fromrole} asignar el rol {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir a los usuarios con el rol {$a->fromrole} modificar el rol {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir a los usuarios con el rol {$a->fromrole} cambiar al rol {$a->targetrole}';
$string['allowroletoview'] = 'Permitir a los usuarios con el rol {$a->fromrole} ver el rol {$a->targetrole}';
$string['allowswitch'] = 'Permitir cambios de rol';
$string['allowview'] = 'Permitir al rol ver';
$string['allsiteusers'] = 'Todos los usuarios del sitio';
$string['analytics:listinsights'] = 'Listar intuiciones (predicciones)';
$string['analytics:listowninsights'] = 'Enumerar ideas propias';
$string['analytics:managemodels'] = 'Gestionar modelos';
$string['archetype'] = 'Arquetipo de rol';
$string['archetype_help'] = 'El rol arquetipo determina los permisos cuando un rol se restablece a su valor por defecto. También determina los permisos del rol cuando el sitio se actualiza.';
$string['archetypecoursecreator'] = 'ARQUETIPO: Creador de cursos';
$string['archetypeeditingteacher'] = 'ARQUETIPO: Profesor con permiso de edición';
$string['archetypefrontpage'] = 'ARQUETIPO: Usuario identificado en la página principal del sitio';
$string['archetypeguest'] = 'ARQUETIPO: Invitado';
$string['archetypemanager'] = 'ARQUETIPO: Gestor';
$string['archetypestudent'] = 'ARQUETIPO: Estudiante';
$string['archetypeteacher'] = 'ARQUETIPO: Profesor sin permiso de edición';
$string['archetypeuser'] = 'ARQUETIPO: Usuario identificado';
$string['assignanotherrole'] = 'Asignar otro rol';
$string['assignedroles'] = 'Roles asignados';
$string['assignerror'] = 'Error al asignar el rol {$a->role} al usuario {$a->user}.';
$string['assignglobalroles'] = 'Asignar roles de sistema';
$string['assignmentcontext'] = 'Contexto de asignación';
$string['assignmentoptions'] = 'Opciones de asignación';
$string['assignrole'] = 'Asignar rol';
$string['assignrolenameincontext'] = 'Asignar rol \'{$a->role}\' en {$a->context}';
$string['assignroles'] = 'Asignar roles';
$string['assignroles_help'] = 'Al asignar un rol a un usuario en un contexto,
le está garantizando los permisos propios de ese rol
en el contexto actual y en todos los contextos de
rango inferior. Por ejemplo, si un usuario se le asigna el rol de estudiante en un curso, también tendrá el rol de estudiante en todas las actividades y bloques dentro del curso.';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'Asignar roles en {$a}';
$string['assignrolesrelativetothisuser'] = 'Asignar roles relativos a este usuario';
$string['backtoallroles'] = 'Regresar a la lista de todos los roles';
$string['backup:anonymise'] = 'Hacer anónimos los datos de usuario en la copia de seguridad';
$string['backup:backupactivity'] = 'Copia de seguridad de las actividades';
$string['backup:backupcourse'] = 'Copia de seguridad de los cursos';
$string['backup:backupsection'] = 'Copia de seguridad de las secciones';
$string['backup:backuptargetimport'] = 'Copia de seguridad de las importaciones';
$string['backup:configure'] = 'Configurar las opciones de la copia de seguridad';
$string['backup:downloadfile'] = 'Descargar archivos de las áreas de copia de seguridad';
$string['backup:userinfo'] = 'Copia de seguridad de los datos de usuario';
$string['badges:awardbadge'] = 'Premiar con una insignia a un usuario';
$string['badges:configurecriteria'] = 'Establecer/editar los criterios de la insignia';
$string['badges:configuredetails'] = 'Establecer/editar los detalles de la insignia';
$string['badges:configuremessages'] = 'Configurar mensajes de la insignia';
$string['badges:createbadge'] = 'Crear/duplicar insignias';
$string['badges:deletebadge'] = 'Eliminar insignias';
$string['badges:earnbadge'] = 'Ganar insignia';
$string['badges:manageglobalsettings'] = 'Gestionar la configuración global de las insignias';
$string['badges:manageownbadges'] = 'Ver y administrar las insignias propias conseguidas';
$string['badges:revokebadge'] = 'Retirar insignia a un usuario';
$string['badges:viewawarded'] = 'Ver los usuarios que hayan obtenido una insignia específica sin que puedan otorgar una insignia';
$string['badges:viewbadges'] = 'Ver insignias disponibles no ganadas';
$string['badges:viewotherbadges'] = 'Ver insignias públicas en los perfiles de los demás usuarios';
$string['block:edit'] = 'Editar la configuración de un bloque';
$string['block:view'] = 'Ver bloque';
$string['blog:create'] = 'Crear nuevas entradas de blog';
$string['blog:manageentries'] = 'Editar y gestionar entradas';
$string['blog:manageexternal'] = 'Editar y gestionar blogs externos';
$string['blog:search'] = 'Buscar entradas de blog';
$string['blog:view'] = 'Ver entradas de blog';
$string['blog:viewdrafts'] = 'Ver entradas de blog en borrador ';
$string['calendar:manageentries'] = 'Gestionar cualquier entrada de calendario';
$string['calendar:managegroupentries'] = 'Gestionar entradas de calendario de grupo';
$string['calendar:manageownentries'] = 'Gestionar entradas de calendario propias';
$string['capabilities'] = 'Habilidades';
$string['capability'] = 'Capacidad';
$string['category:create'] = 'Crear categorías';
$string['category:delete'] = 'Eliminar categorías';
$string['category:manage'] = 'Gestionar categorías';
$string['category:update'] = 'Actualizar categorías';
$string['category:viewcourselist'] = 'Ver categoría de curso y los cursos dentro de ella';
$string['category:viewhiddencategories'] = 'Ver categorías ocultas';
$string['category:visibility'] = 'Ver categorías ocultas';
$string['checkglobalpermissions'] = 'Comprobar los permisos del sistema';
$string['checkpermissions'] = 'Comprobar los permisos';
$string['checkpermissionsin'] = 'Comprobar los permisos en {$a}';
$string['checksystempermissionsfor'] = 'Comprobar los permisos de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Comprobar los permisos que {$a->fullname} tiene en {$a->contextlevel}';
$string['chooseroletoassign'] = 'Por favor, seleccione un rol a asignar';
$string['cohort:assign'] = 'Agregar y eliminar miembros de cohorte';
$string['cohort:manage'] = 'Crear, eliminar y mover cohortes';
$string['cohort:view'] = 'Ver cohortes de todo el sitio';
$string['comment:delete'] = 'Eliminar comentarios';
$string['comment:post'] = 'Enviar comentarios';
$string['comment:view'] = 'Ver comentarios';
$string['competency:competencygrade'] = 'Establecer calificación de competencia';
$string['competency:competencymanage'] = 'Gestionar marcos de competencias';
$string['competency:competencyview'] = 'Ver marcos de competencias';
$string['competency:coursecompetencyconfigure'] = 'Configurar ajustes de competencias de curso';
$string['competency:coursecompetencygradable'] = 'Recibir calificaciones de competencia';
$string['competency:coursecompetencymanage'] = 'Gestionar competencias del curso';
$string['competency:coursecompetencyview'] = 'Ver competencias del curso';
$string['competency:evidencedelete'] = 'Eliminar evidencia';
$string['competency:plancomment'] = 'Comentar un plan de aprendizaje';
$string['competency:plancommentown'] = 'Comentar un plan de aprendizaje propio';
$string['competency:planmanage'] = 'Gestionar planes de aprendizaje';
$string['competency:planmanagedraft'] = 'Gestionar borradores de planes de aprendizaje';
$string['competency:planmanageown'] = 'Gestionar planes de aprendizaje propios';
$string['competency:planmanageowndraft'] = 'Gestionar borradores de planes de aprendizaje propios';
$string['competency:planrequestreview'] = 'Solicitar revisión de un plan de aprendizaje';
$string['competency:planrequestreviewown'] = 'Solicitar revisión de un plan de aprendizaje propio';
$string['competency:planreview'] = 'Revisar un plan de aprendizaje';
$string['competency:planview'] = 'Ver todos los planes de aprendizaje';
$string['competency:planviewdraft'] = 'Ver borradores de planes de aprendizaje';
$string['competency:planviewown'] = 'Ver planes de aprendizaje propios';
$string['competency:planviewowndraft'] = 'Ver borradores de planes de aprendizaje propios';
$string['competency:templatemanage'] = 'Gestionar plantillas de plan de aprendizaje';
$string['competency:templateview'] = 'Ver plantillas de plan de aprendizaje';
$string['competency:usercompetencycomment'] = 'Comentar una competencia un usuario';
$string['competency:usercompetencycommentown'] = 'Comentar una competencia de usuario propia';
$string['competency:usercompetencyrequestreview'] = 'Solicitar revisión de una competencia de usuario';
$string['competency:usercompetencyrequestreviewown'] = 'Solicitar revisión de una competencia de usuario propia';
$string['competency:usercompetencyreview'] = 'Revisar una competencia de usuario';
$string['competency:usercompetencyview'] = 'Ver una competencia de usuario';
$string['competency:userevidencemanage'] = 'Gestionar evidencia de aprendizaje previo';
$string['competency:userevidencemanageown'] = 'Gestionar evidencia propia de aprendizaje previo';
$string['competency:userevidenceview'] = 'Ver evidencia de aprendizaje previo de un usuario';
$string['confirmaddadmin'] = '¿Realmente desea agregar al usuario <strong>{$a}</strong> como nuevo administrador del sitio?';
$string['confirmdeladmin'] = '¿Realmente desea eliminar al usuario <strong>{$a}</strong> de la lista de administradores del sitio?';
$string['confirmroleprevent'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles con la capacidad de {$a->cap} en el contexto {$a->context}?';
$string['confirmroleunprohibit'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles prohibidos con capacidad de {$a->cap} en el contexto {$a->context}?';
$string['confirmunassign'] = '¿Está seguro de que quiere eliminar este rol a este usuario?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar cambio de rol';
$string['confirmunassignyes'] = 'Eliminar';
$string['contentbank:access'] = 'Acceder al banco de contenido';
$string['contentbank:deleteanycontent'] = 'Eliminar cualquier contenido del banco de contenido';
$string['contentbank:deleteowncontent'] = 'Eliminar contenido del banco de contenido propio';
$string['contentbank:downloadcontent'] = 'Descargar contenido del banco de contenido';
$string['contentbank:manageanycontent'] = 'Gestionar cualquier contenido desde el banco de contenido';
$string['contentbank:manageowncontent'] = 'Gestionar cualquier contenido desde su banco propio de contenido';
$string['contentbank:upload'] = 'Subir nuevo contenido al banco de contenido';
$string['contentbank:useeditor'] = 'Crear o editar contenido usando un editor de tipo de contenido';
$string['contentbank:viewunlistedcontent'] = 'Ver contenido no listado del banco de contenido';
$string['context'] = 'Contexto';
$string['contextrolenotallowed'] = 'No se permite el rol {$a} en este contenido.';
$string['course:activityvisibility'] = 'Ocultar/mostrar actividades';
$string['course:bulkmessaging'] = 'Enviar un mensaje a mucha gente';
$string['course:changecategory'] = 'Cambiar la categoría del curso';
$string['course:changefullname'] = 'Cambiar el nombre completo del curso';
$string['course:changeidnumber'] = 'Cambiar el número ID del curso';
$string['course:changelockedcustomfields'] = 'Cambiar campos personalizados bloqueados';
$string['course:changeshortname'] = 'Cambiar el nombre corto del curso';
$string['course:changesummary'] = 'Cambiar el resumen del curso';
$string['course:configurecustomfields'] = 'Configurar campos personalizados del curso';
$string['course:configuredownloadcontent'] = 'Configurar descargar contenido del curso';
$string['course:create'] = 'Crear cursos';
$string['course:creategroupconversations'] = 'Crear conversaciones de grupo';
$string['course:delete'] = 'Eliminar cursos';
$string['course:downloadcoursecontent'] = 'Descargar contenido del curso';
$string['course:enrolconfig'] = 'Configurar ejemplos de matriculación en cursos';
$string['course:enrolreview'] = 'Revisar matriculaciones del curso';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorar restricciones de acceso';
$string['course:ignorefilesizelimits'] = 'Usar archivos mayores a las restricciones por tamaño';
$string['course:isincompletionreports'] = 'Mostrarse en reportes de finalización';
$string['course:manageactivities'] = 'Gestionar actividades';
$string['course:managefiles'] = 'Gestionar archivos';
$string['course:managegrades'] = 'Gestionar calificaciones';
$string['course:managegroups'] = 'Gestionar grupos';
$string['course:managescales'] = 'Gestionar escalas';
$string['course:markcomplete'] = 'Marcar los usuarios como completos al completar un curso';
$string['course:movesections'] = 'Mover secciones';
$string['course:overridecompletion'] = 'Anular el estado de finalización de la actividad';
$string['course:recommendactivity'] = 'Recomendar actividades en el selector de actividades';
$string['course:renameroles'] = 'Renombrar roles';
$string['course:request'] = 'Solicitar nuevos cursos';
$string['course:reset'] = 'Reiniciar curso';
$string['course:reviewotherusers'] = 'Revise otros usuarios';
$string['course:sectionvisibility'] = 'Controlar visibilidad de sección';
$string['course:setcurrentsection'] = 'Ajustar sección actual';
$string['course:setforcedlanguage'] = 'Forzar idioma de curso o actividad';
$string['course:tag'] = 'Cambiar etiquetas de curso';
$string['course:togglecompletion'] = 'Marcar manualmente actividades como completas';
$string['course:update'] = 'Actualizar ajustes de curso';
$string['course:useremail'] = 'Habilitar/deshabilitar dirección email';
$string['course:view'] = 'Ver cursos sin participación';
$string['course:viewcoursegrades'] = 'Ver calificaciones de curso';
$string['course:viewhiddenactivities'] = 'Ver actividades ocultas';
$string['course:viewhiddencourses'] = 'Ver cursos ocultos';
$string['course:viewhiddensections'] = 'Ver secciones ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de usuario ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:viewsuspendedusers'] = 'Ver los usuarios suspendidos';
$string['course:visibility'] = 'Ocultar/mostrar cursos';
$string['createrolebycopying'] = 'Crear un nuevo rol copiando {$a}';
$string['createthisrole'] = 'Crear este rol';
$string['currentcontext'] = 'Contexto actual';
$string['currentrole'] = 'Rol actual';
$string['customroledescription'] = 'Descripción personalizada';
$string['customroledescription_help'] = 'Las descripciones de roles estándar se localizan automáticamente si la descripción personalizada está vacía.';
$string['customrolename'] = 'Nombre completo personalizado';
$string['customrolename_help'] = 'Los nombres de los roles estándar se localizan automáticamente si el nombre personalizado está vacío. Usted debe proporcionar un nombre completo para todos los roles personalizados.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultx'] = 'Valor predeterminado: {$a}';
$string['defineroles'] = 'Definir roles';
$string['definitionofrolex'] = 'Definición de rol \'{$a}\'';
$string['deletecourseoverrides'] = 'Eliminar todas las modificaciones en el curso';
$string['deletelocalroles'] = 'Eliminar todas las asignaciones de rol locales';
$string['deleterolesure'] = '<p> ¿Está seguro de que quiere eliminar el rol "{$a->name} ({$a->shortname})"?</p><p>Actualmente este rol está asignado a {$a->count} usuarios. <p>';
$string['deletexrole'] = 'Eliminar el rol {$a}';
$string['duplicaterole'] = 'Duplicar rol';
$string['duplicaterolesure'] = '<p> ¿Está seguro de que quiere duplicar el rol "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editando el rol \'{$a}\'';
$string['editrole'] = 'Editar rol';
$string['editxrole'] = 'Editar el rol \'{$a}\'';
$string['errorbadrolename'] = 'Nombre de rol incorrecto';
$string['errorbadroleshortname'] = 'Nombre corto de rol incorrecto';
$string['errorexistsrolename'] = 'El nombre de este rol ya existe';
$string['errorexistsroleshortname'] = 'El nombre de este rol ya existe';
$string['errorroleshortnametoolong'] = 'El nombre corto no puede exceder de 100 caracteres';
$string['eventcapabilityassigned'] = 'Capacidad asignada';
$string['eventcapabilityunassigned'] = 'Capacidad desasignada';
$string['eventroleallowassignupdated'] = 'Permitir asignación de roles';
$string['eventroleallowoverrideupdated'] = 'Permitir sobreescritura de roles';
$string['eventroleallowswitchupdated'] = 'Permitir cambio de rol';
$string['eventroleallowviewupdated'] = 'Permitir la visualización de rol';
$string['eventroleassigned'] = 'Rol asignado';
$string['eventrolecapabilitiesupdated'] = 'Capacidades de rol actualizadas';
$string['eventroledeleted'] = 'Rol eliminado';
$string['eventroleunassigned'] = 'Rol sin asignar';
$string['eventroleupdated'] = 'Rol actualizado';
$string['existingadmins'] = 'Administradores actuales del sitio';
$string['existingusers'] = '{$a} usuarios existentes';
$string['explanation'] = 'Explicación';
$string['export'] = 'Exportar';
$string['extusers'] = 'Usuarios existentes';
$string['extusersmatching'] = 'Usuarios existentes que coinciden con \'{$a}\'';
$string['filter:manage'] = 'Gestionar configuración de filtros locales';
$string['frontpageuser'] = 'Usuario identificado en la página principal del sitio';
$string['frontpageuserdescription'] = 'Todos los usuarios identificados en el curso de la página principal del sitio.';
$string['globalrole'] = 'Rol del sistema';
$string['globalroleswarning'] = 'Atención: Cualquier rol que asigne desde esta página se aplicará a los usuarios en todo el sitio, incluyendo la página principal del sitio y todos los cursos.';
$string['gotoassignroles'] = 'Ir a Asignar roles en este {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir a Asignar roles del sistema';
$string['grade:edit'] = 'Editar calificaciones';
$string['grade:export'] = 'Exportar calificaciones';
$string['grade:hide'] = 'Ocultar/mostrar calificaciones de los ítems';
$string['grade:import'] = 'Importar calificaciones';
$string['grade:lock'] = 'Bloquear calificaciones de los ítems';
$string['grade:manage'] = 'Gestionar elementos de calificación';
$string['grade:managegradingforms'] = 'Gestionar métodos de calificación avanzados';
$string['grade:manageletters'] = 'Gestionar calificaciones con letra';
$string['grade:manageoutcomes'] = 'Gestionar resultados de calificaciones';
$string['grade:managesharedforms'] = 'Gestionar plantillas avanzadas de formatos de calificación';
$string['grade:override'] = 'Pasar calificaciones por alto';
$string['grade:sharegradingforms'] = 'Compartir formatos avanzados de calificación como plantillas';
$string['grade:unlock'] = 'Desbloquear calificaciones o elementos';
$string['grade:view'] = 'Ver calificaciones propias';
$string['grade:viewall'] = 'Ver calificaciones de otros usuarios';
$string['grade:viewhidden'] = 'Ver calificaciones ocultas al usuario';
$string['h5p:deploy'] = 'Desplegar contenido H5P';
$string['h5p:setdisplayoptions'] = 'Configurar opciones de visualización de H5P';
$string['h5p:updatelibraries'] = 'Gestionar tipos de contenidos H5P';
$string['highlightedcellsshowdefault'] = 'Las celdas marcadas en la siguiente tabla muestran los permisos predeterminados para cada tipo de rol seleccionados anteriormente.';
$string['highlightedcellsshowinherit'] = 'Las celdas marcadas en la siguiente tabla muestra el permiso (si lo hay) que se hereda. Además de los permisos que realmente desea cambiar, debe dejar todo listo para los permisos a heredar.';
$string['inactiveformorethan'] = 'inactivo durante más de {$a->timeperiod}';
$string['ingroup'] = 'en el grupo "{$a->group}"';
$string['inherit'] = 'Heredar';
$string['invalidpresetfile'] = 'Archivo de definición de rol no válido';
$string['legacy:admin'] = 'ROL HEREDADO: Administrador';
$string['legacy:coursecreator'] = 'ROL HEREDADO: Creador de cursos';
$string['legacy:editingteacher'] = 'ROL HEREDADO: Profesor (editor)';
$string['legacy:guest'] = 'ROL HEREDADO: Invitado';
$string['legacy:student'] = 'ROL  HEREDADO: Estudiante';
$string['legacy:teacher'] = 'ROL HEREDADO: Profesor (no editor)';
$string['legacy:user'] = 'ROL HEREDADO: Usuario identificado';
$string['legacytype'] = 'Tipo de rol heredado';
$string['listallroles'] = 'Listar todos los roles';
$string['localroles'] = 'Roles asignados localmente';
$string['mainadmin'] = 'Admin principal';
$string['mainadminset'] = 'Configurar Admin principal';
$string['manageadmins'] = 'Gestionar los administradores del sitio';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Los gestores pueden acceder a los cursos y modificarlos, pero por lo general no participan en los cursos.';
$string['manageroles'] = 'Gestionar roles';
$string['maybeassignedin'] = 'Tipos de contexto en que puede asignarse este rol';
$string['morethan'] = 'Más de {$a}';
$string['multipleroles'] = 'Roles múltiples';
$string['my:configsyspages'] = 'Configurar plantillas del sistema para las páginas del Área personal';
$string['my:manageblocks'] = 'Gestionar bloques de la página de Área personal';
$string['neededroles'] = 'Roles con permiso';
$string['nocapabilitiesincontext'] = 'Permisos no disponibles en este contexto';
$string['noneinthisx'] = 'Ninguno en este {$a}';
$string['noneinthisxmatching'] = 'No hay usuarios coincidentes con \'{$a->search}\' en este {$a->contexttype}';
$string['norole'] = 'Ningún rol';
$string['noroleassignments'] = 'Este usuario no tiene ninguna tarea de rol en ningún lugar de este sitio';
$string['noroles'] = 'No hay roles';
$string['notabletoassignroleshere'] = 'El administrador no ha habilitado la asignación de roles en este contexto.';
$string['notabletooverrideroleshere'] = 'No tiene privilegios para anular los permisos de ningún rol aquí';
$string['notes:manage'] = 'Gestionar notas';
$string['notes:view'] = 'Ver notas';
$string['notset'] = 'No ajustado';
$string['novisibleroles'] = 'Sin roles';
$string['overrideanotherrole'] = 'Modificar otro rol';
$string['overridecontext'] = 'Modificar contexto';
$string['overridepermissions'] = 'Modificar permisos';
$string['overridepermissions_help'] = 'Las modificaciones de permisos posibilitan permitir o impedir los privilegios seleccionados en un contexto específico.';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'Modificar los permisos del rol \'{$a->role}\' en el contexto \'{$a->context}\'';
$string['overridepermissionsin'] = 'Modificar permisos en {$a}';
$string['overrideroles'] = 'Modificar roles';
$string['overriderolesin'] = 'modificar roles en {$a}';
$string['overrides'] = 'Modificaciones';
$string['overridesbycontext'] = 'Modificaciones (por contexto)';
$string['payment:manageaccounts'] = 'Gestionar cuentas';
$string['payment:viewpayments'] = 'Ver pagos';
$string['permission'] = 'Permiso';
$string['permission_help'] = 'Los permisos son los ajustes con los que usted otorga la posibilidad de llevar a cabo determinadas acciones.
Hay 4 opciones:

* No ajustado
* Permitir: se concede el permiso para actuar.
* Prevenir: se retira el permiso, incluso aunque se admita en un contexto más alto.
* Prohibir: se retira por completo el permiso y no se puede anular en ningún nivel más bajo (más específico).';
$string['permissions'] = 'Permisos';
$string['permissionsforuser'] = 'Permisos para {$a}';
$string['permissionsincontext'] = 'Permisos en {$a}';
$string['portfolio:export'] = 'Exportar a portafolios';
$string['potentialusers'] = '{$a} usuarios potenciales';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potenciales que coinciden con \'{$a}\'';
$string['prevent'] = 'Prevenir';
$string['privacy:metadata:preference:showadvanced'] = 'Manejar el botón de alternar modo avanzado.';
$string['privacy:metadata:role_assignments'] = 'Asignaciones de roles';
$string['privacy:metadata:role_assignments:component'] = 'Plugin encargado de asignación de roles, vacío cuando se establece de forma manual.';
$string['privacy:metadata:role_assignments:itemid'] = 'El ID de la instancia de matrícula/autenticación responsable de esta asignación de rol';
$string['privacy:metadata:role_assignments:modifierid'] = 'El ID del usuario que creó o modificó la asignación de rol';
$string['privacy:metadata:role_assignments:roleid'] = 'El ID del rol';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Esta tabla almacena los roles asignados en cada contexto.';
$string['privacy:metadata:role_assignments:timemodified'] = 'La fecha en la que se creó o modificó la asignación de rol.';
$string['privacy:metadata:role_assignments:userid'] = 'El ID del usuario';
$string['privacy:metadata:role_capabilities'] = 'Capacidades del rol';
$string['privacy:metadata:role_capabilities:capability'] = 'El nombre de la capacidad.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'El ID del usuario que creó o modificó la capacidad';
$string['privacy:metadata:role_capabilities:permission'] = 'El permiso para una capacidad: heredad, permitir, impedir o prohibir.';
$string['privacy:metadata:role_capabilities:roleid'] = 'El ID del rol';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Las capacidades y las capacidades de anulación para un rol particular en un contexto particular';
$string['privacy:metadata:role_capabilities:timemodified'] = 'La fecha en la que la capacidad fue creada o modificada.';
$string['privacy:metadata:role_cohortroles'] = 'Roles para la cohorte';
$string['prohibit'] = 'Prohibir';
$string['prohibitedroles'] = 'Prohibido';
$string['question:add'] = 'Agregar nuevas preguntas';
$string['question:commentall'] = 'Comenta todas las preguntas';
$string['question:commentmine'] = 'Comenta en tus propias preguntas';
$string['question:config'] = 'Configurar tipos de pregunta';
$string['question:editall'] = 'Editar todas las preguntas';
$string['question:editmine'] = 'Editar sus propias preguntas';
$string['question:flag'] = 'Marcar preguntas mientras se intentan';
$string['question:managecategory'] = 'Editar categorías de preguntas';
$string['question:moveall'] = 'Mover todas las preguntas';
$string['question:movemine'] = 'Mover sus propias preguntas';
$string['question:tagall'] = 'Etiquetar todas las preguntas';
$string['question:tagmine'] = 'Etiquetar sus propias preguntas';
$string['question:useall'] = 'Usar todas las preguntas';
$string['question:usemine'] = 'Usar sus propias preguntas';
$string['question:viewall'] = 'Ver todas las preguntas';
$string['question:viewmine'] = 'Ver sus propias preguntas';
$string['rating:rate'] = 'Añadir las calificaciones a los elementos';
$string['rating:view'] = 'Ver la valoración total recibida';
$string['rating:viewall'] = 'Ver todas las valoraciones emitidas por los usuarios';
$string['rating:viewany'] = 'Ver el total de valoraciones que alguien recibió';
$string['reportbuilder:edit'] = 'Edita tus propios informes personalizados';
$string['reportbuilder:editall'] = 'Edita todos los informes personalizados';
$string['reportbuilder:scheduleviewas'] = 'Programe informes para que se vean como otros usuarios';
$string['reportbuilder:view'] = 'Ver informes personalizados';
$string['resetrole'] = 'Restablecer';
$string['resettingrole'] = 'Restableciendo rol \'{$A}\'';
$string['restore:configure'] = 'Configurar opciones de restauración';
$string['restore:createuser'] = 'Crear usuarios en la restauración';
$string['restore:restoreactivity'] = 'Restaurar actividades';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar secciones';
$string['restore:restoretargetimport'] = 'Restaurar archivos señalados como importación';
$string['restore:rolldates'] = 'Está permitido contemplar fechas de configuración de la actividad en la restauración';
$string['restore:uploadfile'] = 'Subir archivos a las áreas de copia de seguridad';
$string['restore:userinfo'] = 'Restaurar datos de usuario';
$string['restore:viewautomatedfilearea'] = 'Restaurar cursos de las copias de seguridad automáticas';
$string['risks'] = 'Riesgos';
$string['role:assign'] = 'Asignar roles a los usuarios';
$string['role:manage'] = 'Crear y gestionar roles';
$string['role:override'] = 'Modificar permisos para otros';
$string['role:review'] = 'Revisión de permisos para los demás';
$string['role:safeoverride'] = 'Modificar permisos seguros para otros';
$string['role:switchroles'] = 'Cambiar a otros roles';
$string['roleallowheader'] = 'Permitir rol:';
$string['roleallowinfo'] = 'Elija un rol para añadir a la lista de roles permitidos en el contexto {$a->context}, capacidad {$a->cap}:';
$string['roleassignments'] = 'Asignaciones de rol';
$string['roledefinitions'] = 'Definiciones de rol';
$string['rolefullname'] = 'Nombre';
$string['roleincontext'] = '{$a->role} en {$a->context}';
$string['roleprohibitheader'] = 'Prohibir rol';
$string['roleprohibitinfo'] = 'Seleccione un rol para añadir a la lista de roles prohibidos en el contexto {$a->context}, capacidad {$a->cap}:';
$string['rolerepreset'] = 'Usar rol predeterminado';
$string['roleresetdefaults'] = 'Por defecto';
$string['roleresetrole'] = 'Usar rol o arquetipo';
$string['rolerisks'] = 'Riesgos del rol';
$string['roles'] = 'Roles';
$string['roles_help'] = 'Un rol es un conjunto de permisos definidos para todo el sitio que usted puede asignar a usuarios específicos en contextos específicos.';
$string['roles_link'] = 'roles';
$string['roleselect'] = 'Seleccionar rol';
$string['rolesforuser'] = 'Roles para el usuario {$a}';
$string['roleshortname'] = 'Nombre corto';
$string['roleshortname_help'] = 'El nombre corto del rol es un identificador del rol de bajo nivel, en el cual solamente están permitidos caracteres ASCII alfanuméricos.';
$string['roletoassign'] = 'Rol a asignar';
$string['roletooverride'] = 'Rol a modificar';
$string['safeoverridenotice'] = 'Nota: Los permisos con riesgo más elevado están bloqueados porque usted únicamente puede modificar permisos seguros.';
$string['search:query'] = 'Realizar búsquedas en todo el sitio';
$string['selectanotheruser'] = 'Seleccionar otro rol';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectrole'] = 'Seleccionar un rol';
$string['showallroles'] = 'Mostrar todos los roles';
$string['showthisuserspermissions'] = 'Mostrar los permisos de este usuario';
$string['site:accessallgroups'] = 'Acceder a todos los grupos';
$string['site:approvecourse'] = 'Aprobar la creación de cursos';
$string['site:backup'] = 'Hacer copia de seguridad de los cursos';
$string['site:config'] = 'Cambiar configuración del sitio';
$string['site:configview'] = 'Ver el árbol de administración del sitio (pero no todas las páginas que contiene)';
$string['site:deleteanymessage'] = 'Borrar los mensajes del sitio';
$string['site:deleteownmessage'] = 'Borrar mensajes enviados a/por el usuario';
$string['site:doanything'] = 'Permiso para todo';
$string['site:doclinks'] = 'Mostrar enlaces a documentos fuera del sitio';
$string['site:forcelanguage'] = 'Sobrescribe idioma del curso';
$string['site:import'] = 'Importar otros cursos a un curso';
$string['site:maintenanceaccess'] = 'Acceder al sitio mientras está en modo mantenimiento';
$string['site:manageallmessaging'] = 'Añadir, eliminar, bloquear o desbloquear contactos para cualquier usuario';
$string['site:manageblocks'] = 'Gestionar bloques en una página';
$string['site:managecontextlocks'] = 'Gestionar la congelación de contextos';
$string['site:messageanyuser'] = 'Omitir las preferencias de privacidad del usuario para enviar mensajes a cualquier usuario';
$string['site:mnetloginfromremote'] = 'Acceso desde una aplicación remota vía MNet';
$string['site:mnetlogintoremote'] = 'Acceder a una aplicación remota vía MNet';
$string['site:readallmessages'] = 'Leer todos los mensajes del sitio';
$string['site:restore'] = 'Restaurar cursos';
$string['site:senderrormessage'] = 'Enviar un mensaje al usuario de soporte desde la página de error';
$string['site:sendmessage'] = 'Enviar mensajes a cualquier usuario';
$string['site:trustcontent'] = 'Confiar en contenidos enviados';
$string['site:uploadusers'] = 'Subir nuevos usuarios desde un archivo';
$string['site:viewanonymousevents'] = 'Ver eventos anónimos en los registros';
$string['site:viewfullnames'] = 'Ver siempre nombres completos de los usuarios';
$string['site:viewparticipants'] = 'Ver a los participantes';
$string['site:viewreports'] = 'Ver informes';
$string['site:viewuseridentity'] = 'Ver la identidad completa del usuario en las listas';
$string['siteadministrators'] = 'Administradores del sitio';
$string['tag:edit'] = 'Editar marcas existentes';
$string['tag:editblocks'] = 'Editar bloques en páginas de marcas';
$string['tag:flag'] = 'Señalar marcas (tags) como inapropiadas';
$string['tag:manage'] = 'Gestionar todas las marcas';
$string['thisnewrole'] = 'Este nuevo rol';
$string['thisusersroles'] = 'Asignaciones de rol de este usuario';
$string['unassignarole'] = 'Desasignar rol {$a}';
$string['unassignconfirm'] = '¿Realmente desea desasignar el rol "{$a->role}" del usuario "{$a->user}"?';
$string['unassignerror'] = 'Error al desasignar el rol {$a->role} del usuario {$a->user}.';
$string['user:changeownpassword'] = 'Cambiar la contraseña propia';
$string['user:create'] = 'Crear usuarios';
$string['user:delete'] = 'Eliminar usuarios';
$string['user:editmessageprofile'] = 'Editar perfil de mensajería de usuario';
$string['user:editownmessageprofile'] = 'Editar el propio perfil de mensajería de usuario';
$string['user:editownprofile'] = 'Editar el perfil de usuario propio';
$string['user:editprofile'] = 'Editar perfil de usuario';
$string['user:ignoreuserquota'] = 'Ignorar límite de cuota de usuario';
$string['user:loginas'] = 'Entrar como otro usuario';
$string['user:manageblocks'] = 'Gestionar bloques en el perfil de usuario de otros usuarios';
$string['user:manageownblocks'] = 'Gestionar bloques en el perfil de usuario público propio';
$string['user:manageownfiles'] = 'Gestionar archivos en las áreas de archivos privados propios';
$string['user:managesyspages'] = 'Configurar el diseño de página predeterminado para los perfiles de usuario públicos';
$string['user:readuserblogs'] = 'Ver todos los blogs de usuario';
$string['user:readuserposts'] = 'Ver todos los mensajes que han publicado los usuarios en los foros';
$string['user:update'] = 'Actualizar perfiles de usuario';
$string['user:viewalldetails'] = 'Ver información completa del usuario';
$string['user:viewdetails'] = 'Ver perfiles de usuario';
$string['user:viewhiddendetails'] = 'Ver detalles ocultos de los usuarios';
$string['user:viewlastip'] = 'Ver última dirección ip del usuario';
$string['user:viewuseractivitiesreport'] = 'Ver informes de actividad de los usuarios';
$string['user:viewusergrades'] = 'Ver calificaciones de los usuarios';
$string['usersfrom'] = 'Usuarios de {$a}';
$string['usersfrommatching'] = 'Usuarios de {$a->contextname} que coinciden con \'{$a->search}\'';
$string['usersinthisx'] = 'Usuarios en este {$a}';
$string['usersinthisxmatching'] = 'Usuarios en este {$a->contexttype} que coinciden con \'{$a->search}\'';
$string['userswithrole'] = 'Todos los usuarios con rol';
$string['userswiththisrole'] = 'Usuarios con rol';
$string['useshowadvancedtochange'] = 'Usar "Mostrar avanzadas" para cambiar';
$string['viewingdefinitionofrolex'] = 'Viendo la definición del rol \'{$a}\'';
$string['viewrole'] = 'Ver detalles del rol';
$string['webservice:createmobiletoken'] = 'Crear una ficha (token) web para acceso por dispositivos móviles';
$string['webservice:createtoken'] = 'Crear una ficha de servicio web';
$string['webservice:managealltokens'] = 'Gestionar los tokens de servicios web de todos los usuarios';
$string['whydoesuserhavecap'] = '¿Por qué {$a->fullname} tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['whydoesusernothavecap'] = '¿Por qué {$a->fullname} no tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['xroleassignments'] = 'Tareas del rol {$a}';
$string['xuserswiththerole'] = 'Usuarios con el rol "{$a->role}"';
