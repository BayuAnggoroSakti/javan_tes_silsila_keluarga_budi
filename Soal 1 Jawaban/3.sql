/****** Script for SelectTopNRows command from SSMS  ******/
select * from [db_tes].[dbo].[tbl_tree]
where id_parent in 
(  SELECT id
  FROM [db_tes].[dbo].[tbl_tree]
  WHERE NAMA = 'BUDI'
)