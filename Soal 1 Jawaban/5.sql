SELECT * FROM [db_tes].[dbo].[tbl_tree]
WHERE id_parent in
(
	select id from [db_tes].[dbo].[tbl_tree]
	where id_parent in 
	(  SELECT id
	  FROM [db_tes].[dbo].[tbl_tree]
	  WHERE NAMA = 'BUDI'
	)
) AND jenis_kelamin = 'WANITA'