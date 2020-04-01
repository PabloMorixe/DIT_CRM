USE [CRM]
GO

INSERT INTO [dbo].[Cliente]
           ([RazonSocial]
           ,[Telefono]
           ,[Cuit]
           ,[Correo]
           ,[FechaInicioRelacion]
           ,[Activo]
           ,[nombreCliente])
     VALUES
           ('Town SA'
           ,'1234567'
           ,'1234567'
           ,'1234567'
           ,'20150303'
           ,'0'
           ,'Motolike')
GO

USE [CRM]
GO

INSERT INTO [dbo].[ClienteSucursales]
           ([Sucursal]
           ,[Dirección]
           ,[idCliente])
     VALUES
           ('JBJ'
           ,'jbj 7499'
           ,1)
GO


USE [CRM]
GO

INSERT INTO [dbo].[UnidadDeNegocio]
           ([UnidadDeNegocioNombre])
     VALUES
           (<UnidadDeNegocioNombre, varchar(200),>)
GO



USE [CRM]
GO

INSERT INTO [dbo].[Servicio]
           ([ServicioNombre]
           ,[FK_IdUnidadDeNegocio]
           ,[ServicioDescripcionInterno]
           ,[Hs insumidas]
           ,[ServicioCosto]
           ,[ServicioDetalleFacturacion]
           ,[ServicioValorHsDolares]
           ,[ServicioValorTotal])
     VALUES
           (<ServicioNombre, varchar(max),>
           ,<FK_IdUnidadDeNegocio, int,>
           ,<ServicioDescripcionInterno, varchar(max),>
           ,<Hs insumidas, float,>
           ,<ServicioCosto, float,>
           ,<ServicioDetalleFacturacion, varchar(max),>
           ,<ServicioValorHsDolares, float,>
           ,<ServicioValorTotal, float,>)
GO


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
           ('titulo'
           ,'descrip'
           ,'1')
GO



