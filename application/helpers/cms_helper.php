<?php

function meta_title($string = NULL){
    $CI = & get_instance();
    $CI->config->item('site_name');
    //$meta_title= e($string) . '-' .$CI->config->item('site_name');
    $meta_title = count(e($string)) > 0 ? e($string) . '||' .$CI->config->item('site_name') : $CI->config->item('site_name');
    return $meta_title;
}
function btnplay($uri,$btneditstring = NULL){
    return anchor($uri,'<i class="glyphicon glyphicon-play-circle"></i>'.$btneditstring);
}
function btnedit($uri,$btneditstring = NULL){
    return anchor($uri,'<i class="glyphicon glyphicon-edit"></i>'.$btneditstring);
}

function btndelete($uri,$btndeletestring = NULL){
    return anchor($uri,'<i class="glyphicon glyphicon-trash"></i>'.$btndeletestring,array('onclick' => "return confirm('"
        . "You are about to delete permanently.This action is irreversible.Are you sure?');"));
}

function btnblock($uri,$blockinstring = NULL){
 return anchor($uri,'<i class="glyphicon glyphicon-eye-close"></i>'.$blockinstring);   
}

function btnunblock($uri,$blockinstring = NULL){
  return anchor($uri,'<i class="glyphicon glyphicon-eye-open"></i>'.$blockinstring);  
}

function article_link($article){
    return  'articles/article/index/' . intval($article->id) . '/' . e($article->slug);    /*url to read more of the article(full article)*/
}

function articles_link($articles){
    $string = '<ul class="nav nav-sidebar">';
    
    foreach($articles as $article){
        $url = article_link($article);
        $string .= '<li>';
        $string .= '<h4>' . anchor($url,  e($article->title)) . '</h4>';
        $string .= '<p class="pubdate">' .e($article->pubdate) .'</p>';
        $string .= '</li>';
    }
    
    $string .= '</ul>';
    return $string;
}

function get_excerpt($article,$homepage=true,$numwords = 50,$DIVclass=NULL,$ULclass=NULL,$LItitleclass=NULL,$LIbodyclass=NULL){
    /*this function returns an excerpt for the article*/
    $string = '';
    $url = 'article/' . intval($article->id) . '/' . e($article->slug);    /*url to read more of the article(full article)*/
    
    if($homepage){
        
    $imagefile = strlen(e($article->image_thumbnail)) < 1 ? site_url('assets/images/image_missing.png') : site_url(e($article->image_thumbnail));   /*file existence or not*/
    $string .= '<div class="'.$DIVclass.'">';                                                /*holds this entire article's data*/
    $string .= '<img src= "'.$imagefile.'" alt ="'.e($article->title).'"><br/>'; 
    $string .= '<ul class = "'.$ULclass.'">';
    $string .= '<li class = "'.$LItitleclass.'">';
    $string .= anchor($url,limit_to_numwords(e(strip_tags($article->title)),7));
    $string .= '</li>';
    $string .= '<li class = "'.$LIbodyclass.'">';
    $string .= limit_to_numwords(e(strip_tags($article->body)),$numwords).' ';
    $string .= anchor($url,'Read more -->',array('title' =>e(strip_tags($article->title))));
    $string .= '</li>';
    $string .= '</ul>';
    $string .= '</div>';
    }else{
        
    $string .= '<h2>' . anchor(e($url),  e($article->title)) . '</h2>';   /*heading of the article*/ 
    $string .= '<p>'.limit_to_numwords(e(strip_tags($article->body)),$numwords).'</p>';
    $string .= anchor($url,'Read more -->',array('title' =>e(strip_tags($article->title))));
    }
    
    return $string;
}

function limit_to_numwords($string,$numwords){
    $excerpt = explode(' ', $string,$numwords + 1);
    if(count($excerpt) >= $numwords){
        array_pop($excerpt);
    }
    $excerpt = implode(' ',$excerpt);
    return $excerpt;
}

function e($string){
    return htmlentities($string);
}

function get_category($array,$child = FALSE){
    /*this function returns a menu navigation bar:style it to suit your needs*/
    $str = '';
    $CI = & get_instance();
    
    /*classes in this function  for example 'nav,dropdown-menu,dropdown,active,dropdwon-toggle'
     *  can be dropped or edited to suit every user needs and their personal css*/
    
    if (count($array)){
        //$str .= $child==false? '<ul class="nav navbar-nav">'.PHP_EOL:'<ul class="dropdown-menu">'.PHP_EOL;
        
        foreach($array as $item){
     
            //$active = $CI->uri->segment(1) == $item['page_url'] ? true : false ;
            $str .='<ul class="nav nav-sidebar"><h3 class="lileftnavhead">'.$item['category_name'].'</h3>';
            
            if(isset($item['children']) && count($item['children'])){
                foreach($item['children'] as $child){
                    $str .= '<li class="lileftnav">'.anchor('project/getwhere/'.$child['id'].'/'.  url_title($child['category_name']),$child['category_name']).'</li>'.PHP_EOL;
                }
            }
            
            
            /*if(isset($item['children']) && count($item['children'])){
                $str .= $active ? '<li class= "dropdown active">' : '<li class= "dropdown">' ;
                $str .= '<a class= "dropdown-toggle " data-toggle="dropdown" href="'.site_url(e($item['page_url'])).'">'.e($item['title']);
                $str .= '<b class="caret"></b></a>'.PHP_EOL;
                $str .= get_menu($item['children'],TRUE);
            }else{
            $str .= $active ? '<li class="active">' : '<li>';
            $str .= '<a href="'.  site_url(e($item['page_url'])).'">'.e($item['title']).'</a>';   
            }
            */
            $str .= '</ul>'.PHP_EOL;
            //$str .= '</li>'.PHP_EOL;
        }
        
        //$str .= '</ul>'.PHP_EOL;
    }
    return $str;
}
function get_menu($array,$child = FALSE){
    /*this function returns a menu navigation bar:style it to suit your needs*/
    $str = '';
    $CI = & get_instance();
    
    /*classes in this function  for example 'nav,dropdown-menu,dropdown,active,dropdwon-toggle'
     *  can be dropped or edited to suit every user needs and their personal css*/
    
    if (count($array)){
        $str .= $child==false? '<ul class="nav navbar-nav">'.PHP_EOL:'<ul class="dropdown-menu">'.PHP_EOL;
        
        foreach($array as $item){
     
            $active = $CI->uri->segment(1) == $item['page_url'] ? true : false ;
            
            if($item['page_url']=='homepage'){
                $active = $CI->uri->segment(1) == '' || $CI->uri->segment(1)=='homepage' ? true: false;
            }
            
            
            
            
            if(isset($item['children']) && count($item['children'])){
                $str .= $active ? '<li class= "dropdown active">' : '<li class= "dropdown">' ;
                $str .= '<a class= "dropdown-toggle " data-toggle="dropdown" href="'.site_url(e($item['page_url'])).'">'.e($item['title']);
                $str .= '<b class="caret"></b></a>'.PHP_EOL;
                $str .= get_menu($item['children'],TRUE);
            }else{
            $str .= $active ? '<li class="active">' : '<li>';
            $str .= '<a href="'.  site_url(e($item['page_url'])).'">'.e($item['title']).'</a>';   
            }
            
            $str .= '</li>'.PHP_EOL;
        }
        
        $str .= '</ul>'.PHP_EOL;
    }
    return $str;
}

function get_parent_menu($array){
    $str = '';
    $CI = & get_instance();
    
    /*classes in this function  for example 'nav,dropdown-menu,dropdown,active,dropdwon-toggle'
     *  can be dropped or edited to suit every user needs and their personal css*/
    
    if (count($array)){
                    
        foreach($array as $item){
            
                $active = isset($item['slug']) && $CI->uri->segment(1) === $item['slug'] ? true : false ;    //mine
            
            if(isset($item['children']) && count($item['children']) && isset($item['slug']) && isset($item['title'])){
                $str .= $active ? '<a class="active" href="'.  site_url(e($item['slug'])).'">'.strtoupper(e($item['title'])).'</a>':
                '<a href="'.  site_url(e($item['slug'])).'">'.strtoupper(e($item['title'])).'</a>';
                
            }elseif(isset($item['slug']) && isset($item['title'])){
            $str .= $active ?'<a class="active" href="'.  site_url(e($item['slug'])).'">'.strtoupper(e($item['title'])).'</a>':
                '<a href="'.  site_url(e($item['slug'])).'">'.strtoupper(e($item['title'])).'</a>'.PHP_EOL;         
            }
            
        }
    
  }
    
    return $str;
}

//$childexistence = false ;
function get_children_menu($array,$childexistence = false){
    $str = '';
    $CI = & get_instance();
    
    /*classes in this function  for example 'nav,dropdown-menu,dropdown,active,dropdwon-toggle'
     *  can be dropped or edited to suit every user needs and their personal css*/
    
    if (count($array)){
        
        foreach($array as $item){
            $active = isset($item['slug']) && $CI->uri->segment(1) === $item['slug'] ? true : false ;    //mine
            if(isset($item['children']) && count($item['children'])){
                $str .= get_children_menu($item['children'],TRUE);
                //$childexistence = true;
            }elseif($childexistence === true){
                    $str .= $active ?'<a class="active" href="'.  site_url(e($item['slug'])).'">'.strtolower(e($item['title'])).'</a>':
                '<a href="'.  site_url(e($item['slug'])).'">'.strtolower(e($item['title'])).'</a>'.PHP_EOL;
                
                   
            }
            
        }
        
    }
    
    return $str;
}

