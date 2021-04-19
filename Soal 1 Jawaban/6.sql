SELECT * FROM [db_tes].[dbo].[tbl_tree]
WHERE id_parent = 
(
	SELECT id_parent FROM [db_tes].[dbo].[tbl_tree]
	WHERE id in
	(
	SELECT id_parent FROM [db_tes].[dbo].[tbl_tree]
	WHERE nama = 'FARAH'
	)
) and jenis_kelamin = 'WANITA'