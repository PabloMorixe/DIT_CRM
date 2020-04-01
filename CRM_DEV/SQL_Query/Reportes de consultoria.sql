/*

select * from [dbo].[ReporteConsultoria] RS
right join [dbo].[ReporteConsultoriaTareas] RCT
on RS.IdReporteConsultoria = RCT.fk_idReporteConsultoria

select * from [dbo].[ReporteConsultoriaTareas] RCT 
inner join [dbo].[ReporteConsultoria] Rc
on rct.fk_idReporteConsultoria = rc.IdReporteConsultoria 
*/

---------------
--ver Reportes de consultoria con todos los datos
---------------

	select  rs.idreporteconsultoria , C.RazonSocial,cs.Sucursal,e.Nombre + ' '+ e.Apellido as Consultor, 
	Rs.FechaHoraInicio, rs.FechaHoraFin, udn.UnidadDeNegocioNombre, serv.ServicioNombre, rct.TareaDescripcion --,	* 
		
	from [dbo].[ReporteConsultoria] RS
	inner join [dbo].[Cliente] c
	on RS.FK_IdCliente = c.IdCliente

	inner join [dbo].[ClienteSucursales] CS
	on rs.FK_IdSucursal = cs.idSucursal

	inner join [dbo].[Empleado] E
	on RS.FK_IdEmpleado = e.IdEmpleado

	inner join [dbo].[UnidadDeNegocio] UDN
	on rs.FK_idUnidadDeNegocio = udn.IdUnidadDeNegocio

		inner join [dbo].[Servicio] Serv
	on rs.FK_idServicio = serv.IdServicio

	inner join [dbo].[ReporteConsultoriaTareas] RCT
	on RS.IdReporteConsultoria = RCT.fk_idReporteConsultoria

order by 1


