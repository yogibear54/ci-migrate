<?php

class Migration_sample_migration extends CI_Migration
{
	// see dbforge to manage database tables:  https://www.codeigniter.com/user_guide/database/forge.html
    public function up()
    {
        echo "+001 " . get_class() . " <br />";

        //create table sample 1
        $this->db->query("              
            CREATE TABLE IF NOT EXISTS `coupons` (
                `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `coupon_id` INT NOT NULL,
                `coupon_code` VARCHAR(100) NULL,
                `discount_type` TINYINT(1) NULL COMMENT 'discount_type:\n0 = amount, 1 = percentage',
                `name` VARCHAR(255) NULL,
                `description` VARCHAR(255) NULL,
                `discount_amount` DECIMAL(6,2) NULL,
                `discount_percentage` DECIMAL(5,2) NULL,
                `validity_started_at` DATETIME NULL,
                `validity_expired_at` DATETIME NULL,
                `eligible_to_new_customers_only` TINYINT(1) NULL,
                `eligible_to_minimum_order_amount` DECIMAL(6,2) NULL,
                `maximum_number_of_redemption` INT NULL,
                PRIMARY KEY (`id`))
                ENGINE = InnoDB
        ");

        //create table sample 2
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('coupon2');
    }
    
    public function down()
    {
        echo "-001 " . get_class() . " <br />";
        $this->dbforge->drop_table('coupons');
        $this->dbforge->drop_table('coupons2');
    }
}
