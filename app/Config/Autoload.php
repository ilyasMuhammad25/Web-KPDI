<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

/**
 * -------------------------------------------------------------------
 * AUTO-LOADER
 * -------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 *
 * NOTE: If you use an identical key in $psr4 or $classmap, then
 * the values in this file will overwrite the framework's values.
 */
class Autoload extends AutoloadConfig
{
	/**
	 * -------------------------------------------------------------------
	 * Namespaces
	 * -------------------------------------------------------------------
	 * This maps the locations of any namespaces in your application to
	 * their location on the file system. These are used by the autoloader
	 * to locate files the first time they have been instantiated.
	 *
	 * The '/app' and '/system' directories are already mapped for you.
	 * you may change the name of the 'App' namespace if you wish,
	 * but this should be done prior to creating any namespaced classes,
	 * else you will need to modify all of those classes for this to work.
	 *
	 * Prototype:
	 *
	 *   $psr4 = [
	 *       'CodeIgniter' => SYSTEMPATH,
	 *       'App'	       => APPPATH
	 *   ];
	 *
	 * @var array<string, string>
	 */
	public $psr4 = [
		APP_NAMESPACE   => APPPATH, // For custom app namespace
		'App'           => APPPATH,
		'Config'        => APPPATH . 'Config',
		'DataTables'    => APPPATH .'Libraries/DataTables',
		'Modules'       => APPPATH . 'Modules',
		'Uigniter'      => APPPATH . 'Modules/Uigniter',
		'Core'       	=> APPPATH . 'Modules/Core',
		'Auth' 			=> APPPATH . 'Modules/Core/Auth',
		'User' 			=> APPPATH . 'Modules/Core/User',
        'Home' 			=> APPPATH . 'Modules/Frontend/Home',
			'Banner' 		=> APPPATH . 'Modules/Cms/Banner',
				'Tag' 		=> APPPATH . 'Modules/Master/Tag',
					'Dashboard' 		=> APPPATH . 'Modules/Backend/Dashboard',
					'Report' 			=> APPPATH . 'Modules/Backend/Report',
					'Artikel' 			=> APPPATH . 'Modules/Backend/Koleksi/Artikel',
					'Eksemplar' 		=> APPPATH . 'Modules/Backend/Koleksi/Eksemplar',
					'Katalog' 			=> APPPATH . 'Modules/Backend/Koleksi/Katalog',
					'KontenDigital' 	=> APPPATH . 'Modules/Backend/Koleksi/KontenDigital',
					'SampulBuku' 		=> APPPATH . 'Modules/Backend/Koleksi/SampulBuku',
					'Sirkulasi' 		=> APPPATH . 'Modules/Backend/Sirkulasi',
            		'Anggota' 			=> APPPATH . 'Modules/Backend/Keanggotaan/Anggota',
					'Mastertag'		 	=> APPPATH . 'Modules/Backend/Mastertag',
					'KeranjangAnggota' 	=> APPPATH . 'Modules/Backend/Keanggotaan/KeranjangAnggota',
					'Perpanjangan' 		=> APPPATH . 'Modules/Backend/Keanggotaan/Perpanjangan',	       
 					'Sumbangan'			 => APPPATH . 'Modules/Backend/Keanggotaan/Sumbangan',
	];

	/**
	 * -------------------------------------------------------------------
	 * Class Map
	 * -------------------------------------------------------------------
	 * The class map provides a map of class names and their exact
	 * location on the drive. Classes loaded in this manner will have
	 * slightly faster performance because they will not have to be
	 * searched for within one or more directories as they would if they
	 * were being autoloaded through a namespace.
	 *
	 * Prototype:
	 *
	 *   $classmap = [
	 *       'MyClass'   => '/path/to/class/file.php'
	 *   ];
	 *
	 * @var array<string, string>
	 */
	public $classmap = [];
	
}
