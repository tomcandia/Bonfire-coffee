<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_User_language extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;
		$this->load->dbforge();

		$field = array(
			'language' => array(
				'type'			=> 'varchar',
				'constraint'	=> 20,
<<<<<<< HEAD
				'default'		=> 'spanish'
=======
				'default'		=> 'english'
>>>>>>> FETCH_HEAD
			)
		);

		$this->dbforge->add_column('users', $field);

<<<<<<< HEAD
		$languages = serialize(array('english', 'portuguese', 'persian', 'spanish'));
=======
		$languages = serialize(array('english', 'portuguese', 'persian'));
>>>>>>> FETCH_HEAD
		$language_setting = "
			INSERT INTO `{$prefix}settings` (`name`, `module`, `value`) VALUES
			 ('site.languages', 'core', '".$languages."');
		";

		$this->db->query($language_setting);

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;
		$this->load->dbforge();

		$this->dbforge->drop_column('users', 'language');

		$this->db->where('name', 'site.languages')->delete('settings');;

	}

	//--------------------------------------------------------------------

<<<<<<< HEAD
}
=======
}
>>>>>>> FETCH_HEAD
