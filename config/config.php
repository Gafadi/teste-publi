<?php
    class configBase {
        public $url = "";
        public $canonical = "";
        public $breadcrumb_url_home = "";
        public $breadcrumb_text_before_home = "";
        public $breadcrumb_text_home = "Home";
        public $breadcrumb_spacer = " » ";
        public $url_extension = "";

        public function __construct($array_urls, $options = null)    {
            if (!empty($options))
            {
                foreach($options as $i => $option)
                {
                    $this->$i = $option;
                }
            }
            $this->url = $this->setUrl($array_urls);
            $this->canonical = $this->setCanonical();
        }
        
        private function setUrl($urls) {
            $url = $urls[1];
            if (strpos($_SERVER["SERVER_NAME"], "localhost") !== false)
            {
                $url = $urls[0];
            }
            return $url;
        }
        
        private function setCanonical()    {
            $pag = $_SERVER["PHP_SELF"];
            $url_explode = explode("/", $pag);
            $url_pagina = end($url_explode);
            if ($url_pagina == "index.php" || $url_pagina == "index" || $url_pagina == "")
            {
                $url_pagina = str_replace("index.php", "", $url_pagina);
                $url_canonical = $this->url.$url_pagina;
            }
            else
            {
                $url_pagina = str_replace(".php", "", $url_pagina);
                $url_canonical = $this->url.$url_pagina;
            }
            if (!empty($this->url_extension))
            {
                $url_canonical .= $this->url_extension;
            }
            return $url_canonical;
        }
        
        public function formatStringToURL($string)    {
            $str   = trim($string);
            $str_a = strtolower($str);
            $str_b = strip_tags($str_a);
            $str_c = preg_replace_callback('!\s+!',
            function($m) {
                return "-";
            }, $str_b);
            $array_a = array('.', '!', '@', '#', '$', '%', '&', '*', '+', '=', '(', ')', '[', ']', '{', '}', '<', '>', '\'');
            $array_b = array('-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
            $str_d = str_replace($array_a, $array_b, $str_c);
            $array_1 = array('ª', '°', 'º', ',', ';', ':', '/', '~', '?', '!', 'á', 'é', 'í', 'ó', 'ú', 'â', 'ê', 'î', 'ô', 'û', 'à', 'è', 'ì', 'ò', 'ù', 'ã', 'õ', 'ç', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Â', 'Ê', 'Î', 'Ô', 'Û', 'À', 'È', 'Ì', 'Ò', 'Ù', 'Ã', 'Õ', 'Ç', 'Ñ', 'ä', 'Ä', 'ë', 'Ë', 'ï', 'Ï', 'ö', 'Ö', 'ü', 'Ü');
            $array_2 = array('', '', '', '', '', '', '-', '-', '', '', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
            $str_e = str_replace($array_1, $array_2, $str_d);
            $str_f = preg_replace_callback('/[-]+/',
            function($m) {
                return "-";
            }, $str_e);
            $url = trim($str_f, "-");
            return $url;
        }

        public function replace($procurar_nessa, $primeira_occorencia_dessa, $primeira_ou_ultima = 1, $trocar_por = '') {
            if (!empty($primeira_occorencia_dessa)) {
                if ($primeira_ou_ultima === 1) {
                    $encontrado = strpos($procurar_nessa, $primeira_occorencia_dessa, 0);
                } else {
                    $encontrado = strrpos($procurar_nessa, $primeira_occorencia_dessa);
                }
                if ($encontrado === true || $encontrado === 0 || is_numeric($encontrado)) {
                    return substr_replace($procurar_nessa, $trocar_por, $encontrado, strlen($primeira_occorencia_dessa));
                }
            }
            return $procurar_nessa;
        }

        public function breadcrumb($array){
            $html = "";
            $n_array = count($array);
            $link_home = $this->url;
            if (!empty($this->breadcrumb_url_home)) {
                $link_home = $this->breadcrumb_url_home;
            }
            $html .= "<div id=\"breadcrumb\">\n";
            $html .= $this->breadcrumb_text_before_home;
            $html .= "<a rel=\"home\" href=\"" . $link_home . "\" title=\"" . $this->breadcrumb_text_home . "\"><span>" . $this->breadcrumb_text_home . "</span></a>" . $this->breadcrumb_spacer;
            $i = 1;
            foreach($array as $string) {
                $html .= $this->setBreadcrumb($i, $n_array, $string);
                if ($i < $n_array) {
                    $html .= $this->breadcrumb_spacer;
                }
                $i++;
            }
            for ($index = 1; $index < $i; $index++) {
                $html .= "</div>\n";
            }
            $html .= "</div>\n";
            return $html;
        }

        private function setBreadcrumb($n, $total, $string){
            $convert_string_to_url = $this->formatStringToURL($string);
            if ($convert_string_to_url == "mapa-do-site")    {
                $convert_string_to_url = "mapa-site";
            }
            $url_breadcrumb = $this->url . $convert_string_to_url;
            if (!empty($this->url_extension)) {
                $url_breadcrumb .= $this->url_extension;
            }
            $html  = "<div>\n";
            $html .= "<a href=\"" . $url_breadcrumb . "\" title=\"" . $string . "\">\n";
            $html .= $n == $total ? "<strong>" : "";
            $html .= "<span class=\"page\">" . $string . "</span>";
            $html .= $n == $total ? "</strong>" : "";
            $html .= "\n</a>\n";
            return $html;
        }
    }