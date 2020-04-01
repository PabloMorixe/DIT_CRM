select [TExT],* from sysprocesses as sp
cross apply  sys.dm_exec_sql_text (sp.sql_handle) 
where sp.dbid = db_id('crm')