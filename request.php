<?

	namespace spbitec\vetassist;
   
   class request{
		static function get($a){
      	$q=http_build_query($method, $a);
         $ret=file_get_contents(ITV_REST_URL.trim($method,'/').'/'.$q);
         return $ret;
      }
   }
