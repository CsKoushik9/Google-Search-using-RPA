<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Results</title>
        <style>
            table,th,td{
                padding: 2px;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
    
        <table>
        <?php
        error_reporting(0);
        require 'simple_html_dom.php';
        $search=$_GET['searc'];
        $search= str_replace(' ', '%', $search);
        $file = file_get_html('https://www.google.com/search?q='.$search);
        $i=0;
        $content=array();
        $j=0;
        while(true)
        {
            $hrefs = $file->find('div',$i);
            
            if($hrefs->class=='g')
            {
                $str=$hrefs->innertext().'<br>';
                preg_match('~<cite>(.*?)</cite>~', $str, $output);
                $link=$output[1];
                
                $str=str_replace($link, '', $str);
                preg_match('~<a href=(.*?)>~', $str, $output);
                if(strpos($link,'w')==0)
                {
                    $link='http://'.$link;
                }
                $str1= str_replace($output[1], $link, $str);
                $str1= str_replace('<b>', '', $str1);
                $str1= str_replace('</b>', '', $str1);
                //echo $str1;
                if($j%2==0)
                {
                    ?>
            <tr>
                <td><?php echo $str1;?></td>
            <?php
                }
                else
                {
                ?>
                <td><?php echo $str1;?></td>
            </tr>
            <?php
                }
                $j+=1;
                
            }
            else if($hrefs->class=='gb_ab')
            {
                break;
            }
            $i+=1;
        }
     
        
        ?>
        
        </table>
    </body>
</html>
