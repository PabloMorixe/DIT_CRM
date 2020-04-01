--Insert de una reporte de consultoria

USE [CRM]
GO

INSERT INTO [dbo].[ReporteConsultoria]
           ([FK_IdCliente]
           ,[FK_IdSucursal]
           ,[FK_IdEmpleado]
           ,[FechaHoraInicio]
           ,[FechaHoraFin]
           ,[FK_idUnidadDeNegocio]
           ,[FK_idServicio])
     VALUES
           ('1'
           ,'1'
           ,'1'
           ,getdate()
           ,getdate()
           ,'1'
           ,'1')
GO
USE [CRM]
GO

INSERT INTO [dbo].[ReporteConsultoriaTareas]
           ([TituloTarea]
           ,[TareaDescripcion]
           ,[fk_idReporteConsultoria])
     VALUES
           ('Titulo nuevo'
           ,'Descripcion'
           ,(select top 1 idReporteConsultoria from  [ReporteConsultoria] order by [IdReporteConsultoria] desc ))
GO
