<?php
//ini_set('memory_limit', '2048M'); // or you could use 1G
function tableme($result) {
    // $header='';
    // $rows='';
    // while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    //     if($header=='') {
    //         $header.='<tr>'; 
    //         $rows.='<tr>'; 
    //         foreach($row as $key => $value){ 
    //             $header.='<th>'.$key.'</th>'; 
    //             $rows.='<td>'.$value.'</td>'; 
    //         } 
    //         $header.='</tr>'; 
    //         $rows.='</tr>'; 
    //     } else {
    //         $rows.='<tr>'; 
    //         foreach($row as $key => $value){ 
    //             $rows .= "<td>".$value."</td>"; 
    //         } 
    //         $rows.='</tr>'; 
    //     }
    // } 
    // return '<table>'.$header.$rows.'</table>';

    $header='';
    $rows='';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
        //$rows.='<tr>'; 
        foreach($row as $key => $value){ 
            switch($key){
                case 'id':
                case 'ID':
                    $header.='<i>#'.$value.'</i>';
                    break;
                case 'name_japanese':
                    $header='<b>'.$value.'</b>'.$header;
                    break;
                case 'iName':
                    $header='<b>'.$value.'</b>'.$header;
                    break;
                default:
                    break;
            }
            $rows.='<tr>';
            $rows.='<th>'.ucwords(str_replace('_', ' ', $key)).'</th>'; 
            $rows.='<td>'.$value.'</td>'; 
            $rows.='</tr>';
        }
        $header.='</tr>'; 
        //$rows.='</tr>';
        $block.='<li><table><tr><h3><th colspan="2">'.$header.'</th><h3></tr>'.$rows.'</table></li>';
        $output.='<div class="container"><ul>'.$block.'</ul></div>';
        $rows=$block=$header="";
    } 
    return $output;
}
?>