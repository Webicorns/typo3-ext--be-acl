#
# Table structure for table 'tx_beacl_acl'
#
CREATE TABLE tx_beacl_acl (
	UNIQUE KEY uniqueacls (pid,type,object_id,recursive),
);
