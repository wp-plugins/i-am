<?php
/**
 * Options Plugin
 * Make configutarion
*/
if ( !class_exists('i_am_make') ) {
class i_am_make extends WP_Widget{

        public $parameter       = array();
        public $options         = array();
        public $components      = array();


    function getHeaderPlugin(){
        //code 

        return array( 'id'            =>'i_am_id',
                     'id_menu'        =>'i-am',
                     'name'           =>'i_am',
                     'name_long'      =>'I am',
                     'name_option'    =>'i_am',
                     'name_plugin_url'=>'i-am',
                     'descripcion'    =>'Show who you are in your blog',
                     'version'        =>'1.3',
                     'url'            =>'',
                     'logo'           =>'<i class="fa fa-user text-long" style="padding:16px 19px;"></i>',
                      // or image .jpg,png | use class 'text-long' in case of name long
                     'logo_text'      =>'', // alt of image
                     'slogan'         =>'', // powered by <a href="">iLenTheme</a>
                     'url_framework'  =>plugins_url()."/i-am/assets/ilenframework",
                     'theme_imagen'   =>plugins_url()."/i-am/assets/images",
                     'twitter'        => 'https://twitter.com/intent/tweet?text=View this awesome plugin WP;url=http://bit.ly/Xz8MYo&amp;via=iLenTheme',
                     'wp_review'      => 'http://wordpress.org/support/view/plugin-reviews/i-am?filter=5',
                     'type'           =>'plugin',
                     'method'         =>'free',
                     'themeadmin'     =>'fresh');
    }

    function getOptionsPlugin(){

    return array('a'=>array(                'title'      => __('Information',$this->parameter['name_option']),
                                            'title_large'=> __('',$this->parameter['name_option']),
                                            'description'=> '',
                                            'icon'       => 'fa fa-circle-o',


                                            'options'    => array(  


                                                                    array(  'title' =>__('Name:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"Your name identification",
                                                                            'type'  =>'text',
                                                                            'value' =>'My Name',
                                                                            'placeholder'=>'iLen',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'name', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'name',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Name Color:',$this->parameter['name_option']),
                                                                            'help'  =>__('Choose a color the your name',$this->parameter['name_option']),
                                                                            'type'  =>'color',
                                                                            'value' =>'#ff2d55',
                                                                            'id'    =>$this->parameter['name_option']. '_'. 'name_color',
                                                                            'name'  =>$this->parameter['name_option']. '_'. 'name_color',
                                                                            'class' =>'',  
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Description:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"Description of what you do",
                                                                            'type'  =>'text',
                                                                            'value' =>'My description of what you do',
                                                                            'placeholder'=>'Developer WP & Design',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'description', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'description',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Link:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"If you have a personal link, you can put it here example: http://google.com",
                                                                            'type'  =>'text',
                                                                            'value' =>'http://google.com',
                                                                            'placeholder'=>'http://es.ilentheme.com',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'link', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'link',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),

                                                            )
                                        ),
                            'b'=>array(     'title'      => __('Social Network',$this->parameter['name_option']),
                                            'title_large'=> __('',$this->parameter['name_option']),
                                            'description'=> '',
                                            'icon'       => 'fa fa-twitter',
                                            'options'    => array(

                                                                    array(  'title' =>__('Twitter link:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"Enter the full URL of your twitter profile",
                                                                            'type'  =>'text',
                                                                            'value' =>'https://twitter.com/ilentheme',
                                                                            'placeholder' =>'https://twitter.com/ilentheme',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'twitter', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'twitter',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Facebook link:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"Enter the full URL of your facebook profile",
                                                                            'type'  =>'text',
                                                                            'value' =>'https://www.facebook.com/iLenTheme',
                                                                            'placeholder' =>'https://www.facebook.com/iLenTheme',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'facebook', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'facebook',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Google+ link:',$this->parameter['name_option']), //title section
                                                                            'help'  =>"Enter the full URL of your google plus profile",
                                                                            'type'  =>'text',
                                                                            'value' =>'',
                                                                            'id'    =>$this->parameter['name_option'].'_'.'google', 
                                                                            'name'  =>$this->parameter['name_option'].'_'.'google',  
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),
 

                                                )
                                        ),
                            'c'=>array(     'title'      => __('Media',$this->parameter['name_option']),  
                                            'title_large'=> __('',$this->parameter['name_option']), 
                                            'description'=> '',
                                            'icon'       => 'fa fa-circle-o',
                                            'options'    => array(

                                                                    array(  'title' =>__('Your photo:',$this->parameter['name_option']),
                                                                            'help'  =>__('Choose your personal photo to identify',$this->parameter['name_option']),
                                                                            'type'  =>'upload',
                                                                            'value' =>'http://i.imgur.com/CHbM2qN.png',
                                                                            'id'    =>$this->parameter['name_option']. '_'. 'photo',
                                                                            'name'  =>$this->parameter['name_option']. '_'. 'photo',
                                                                            'class' =>'',  
                                                                            'row'   =>array('a','b')),


                                                                    array(  'title' =>__('Background Header:',$this->parameter['name_option']),
                                                                            'help'  =>__('Choose a background that identifies you',$this->parameter['name_option']),
                                                                            'type'  =>'upload',
                                                                            'value' =>'http://i.imgur.com/FDgnai1.jpg',
                                                                            'id'    =>$this->parameter['name_option']. '_'. 'background',
                                                                            'name'  =>$this->parameter['name_option']. '_'. 'background',
                                                                            'class' =>'',  
                                                                            'row'   =>array('a','b')),

                                                                    array(  'title' =>__('Height Header',$this->parameter['name_option']),
                                                                            'help'  =>__('Height of the header of the background in px',$this->parameter['name_option']),
                                                                            'type'  =>'range',
                                                                            'id'    =>$this->parameter['name_option']. '_'. 'height_header',
                                                                            'name'  =>$this->parameter['name_option']. '_'. 'height_header',
                                                                            'min'   =>130,
                                                                            'max'   =>250,
                                                                            'step'  =>10,
                                                                            'value' =>150,
                                                                            'class' =>'',
                                                                            'row'   =>array('a','b')),


                                                                    array(  'title' =>__('Background Color Header:',$this->parameter['name_option']),
                                                                            'help'  =>__('Choose a background color that identifies you',$this->parameter['name_option']),
                                                                            'type'  =>'color',
                                                                            'value' =>'#AAB3BB',
                                                                            'id'    =>$this->parameter['name_option']. '_'. 'background_color',
                                                                            'name'  =>$this->parameter['name_option']. '_'. 'background_color',
                                                                            'class' =>'',  
                                                                            'row'   =>array('a','b')),

                                                )
                                        ),
                            'last_update'=>time(),


            );
        
    }












    function __construct(){

        if( is_admin() )
            self::configuration_plugin();
        else
            self::parameters();

        // Widget Builder.
        $widget_ops = array('classname' => 'widget_i_am', 'description' => 'Show who you are in your blog' );
        $this->WP_Widget('widget_i_am', "I am", $widget_ops);
    }


    function parameters(){

        $this->parameter = self::getHeaderPlugin();
    }



    function myoptions_build(){

        $this->options = self::getOptionsPlugin();

        return $this->options;
        
    }

    function use_components(){
        //code 
        $this->components = array();

    }

    function configuration_plugin(){
        // set parameter 
        self::parameters();

        // my configuration 
        self::myoptions_build();

        // my component to use
        self::use_components();
    }

}
}

global $widget_i_am;
$widget_i_am = new i_am_make;
?>