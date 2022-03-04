<?php
//debut des classes 
class Formulaire//classe pour le formulaire 
 {
    public $name;
    public $action;
    public $method;
    public $class;
    
    public function __construct($args=array())
    {
        // On vérifie que $args['name'] n'est pas vide avec !empty
        if(!empty($args['name']))
            $this->name = $args['name'];
        else
            $this->name = 'monformulaire';
        // On vérifie que $args['action'] n'est pas vide
        if(!empty($args['action']))
            $this->action = $args['action'];
        else
            $this->action = 'action.php';
        // On vérifie que $args['method'] n'est pas vide
        if(!empty($args['method']))
            $this->method = $args['method'];
        else
            $this->method = 'POST';
        // On vérifie que $args['classe'] n'est pas vide
        if(!empty($args['classe']))
            $this->classe = $args['classe'];
        else
            $this->classe = null;
        
        echo '<form enctype="multipart/form-data" name="'.$this->name.'" method="'.$this->method.'" action="'.$this->action.'" class="'.$this->classe.'">';    
    }
    private static function PDO($sql)
    {
        global $db;
        $db->prepare($sql);
        if($sql->query())
             return true;
        
        else
            return false;
        
    }
    // Méthode permettant de générer un input
    public function input($args=array())
    {
        /* Liste des arguments
        *   - name
        *   - type
        *   - id
        *   - classe
        */
        // On fait un switch pour la liste des types valide
        switch($args['type'])
        {
            case 'text':
                $type = 'text';
            break;
            case 'password':
                $type = 'password';
            break;
            case 'tel':
                $type = 'tel';
            break;
            case 'email':
                $type = 'email';
            break;
            default:
                $type = 'text';
            break;
        }
        
    
        // On retourne notre champ
        return '<input type="'.$type.'" name="'.$args['name'].'" id="'.$args['id'].'" class="'.$args['classe'].'" />';
    }
    // Méthode permettant de retourner un champ de type file
    public function fichier($args=array())
    {
        /* Liste des arguments
        *   - nb
        *   - name
        *   - classe
        */
        // On vérifie si l'argument nb est renseigné sinon on le définit à 1
        if($args['nb'])
            $nb = (int) $args['nb'];
        else
            $nb = 1;
        // On déclare notre variable str
        $str = '';
        for($i=0;$i<$nb;$i++)
        {
            // On renseigne nos champs dans la variable str
            $str.= '<input type="file" name="'.$args['name'].'[]" class="'.$args['classe'].'" />';
        }
        return $str;   
    }
    // Méthode pour retourner un champ de type textarea
    public function textarea($args=array())
    {
        /* Liste des arguments
        *  - name
        *  - id
        *  - classe
        *  - valeur
        */
        return '<textarea name="'.$args['name'].'" id="'.$args['id'].'" class="'.$args['classe'].'">'.$args['valeur'].'</textarea>';
    }
    // Méthode pour retourner un champ de type checkbox
    public function checkbox($args=array())
    {
        /* Liste des arguments
        *   - name
        *   - valeur(s)
        *   - classe
        */
        // On instancie notre variable $str
        $str = '';
        // On vérifie si on a bien des valeur(s)
        if(count($args['valeur']) > 1)
        {
            // On explore les différentes valeurs avec un foreach
            foreach($args['valeur'] as $valeur)
            {
                // On génère nos champs
                $str.= '<input type="checkbox" name="'.$args['name'].'[]" class="'.$args['classe'].'" value="'.$valeur.'" />';
            }
        }
        else
        {
            // Si j'ai qu'une valeur
            $str.= '<input type="checkbox" name="'.$args['name'].'" class="'.$args['classe'].'" value="'.$args['valeur'][0].'" />';
        }
        return $str;
    }
    // Méthode pour retourner des champs type radio
    public function radio($args=array())
    {
        /* Liste des arguments
        *   - name
        *   - valeur(s)
        *   - classe
        */
        // On instancie notre variable $str
        $str = '';
        // On vérifie si on a bien des valeur(s)
        if(count($args['valeur']) > 1)
        {
            // On explore les différentes valeurs avec un foreach
            foreach($args['valeur'] as $valeur)
            {
                // On génère nos champs
                $str.= '<input type="radio" name="'.$args['name'].'" class="'.$args['classe'].'" value="'.$valeur.'" />';
            }
        }
        else
        {
            // Si j'ai qu'une valeur
            $str.= '<input type="radio" name="'.$args['name'].'" class="'.$args['classe'].'" value="'.$args['valeur'][0].'" />';
        }
        return $str;
    }
    // Méthode permettant de générer un champ select
    public function select($args=array())
    {
        /* Liste des arguments
        *    - name
        *    - valeur(s)
        *    - classe
        *    - multiple
        */
        // On instancie notre variable $str
        $str= '';
        if($args['multiple']) $multiple = 'multiple="multiple"';
        else $multiple = null;
        $str.= '<select name="'.$args['name'].'" class="'.$args['classe'].'" '.$multiple.'>';
        foreach($args['valeur'] as $key => $valeur)
        {
            $str.= '<option value="'.$key.'">'.$valeur.'</option>';
        }
        $str.= '</select>';
        return $str;
    }
    public function button($args=array())
    {
        /* Liste des arguments
        *   - name
        *   - valeur
        *   - classe
        *   - id
        *   - type
        */
        switch($args['type'])
        {
            case 'button':
                $type = 'button';
            break;
            case 'submit':
                $type = 'submit';
            break;
            case 'reset':
                $type = 'reset';
            break;
            default:
                $type = 'button';
            break;
        }
        $str= '<button type="'.$type.'" name="'.$args['name'].'" id="'.$args['id'].'" class="'.$args['classe'].'">'.$args['valeur'].'</button>';
        if($type == 'submit')
            $str.= '</form>';

        return $str;
    }
    public static function traitement($table)
    {
        global $_POST;
        global $_GET;
        global $_FILES;
        global $db;
        $sql = 'INSERT INTO `'.$table.'`SET';
        $i =0;
        foreach($_POST as $key_post => $valeur_post)
        {
            if(is_array($valeur_post))
            {
                if(count($_POST)< $i)
                $sql.=''.$key_post.'='.$valeur_post.',';
                else
                $sql.=''.$key_post.'='.$valeur_post.',';
            }
            $i++;
        }
        $i=0;
        foreach($_GET as $key_get => $valeur_get)
        {
            if(is_array($valeur_get))
            {
                if(count($_GET)< $i)
                $sql.=''.$key_get.'='.$valeur_get.',';
                else
                $sql.=''.$key_get.'='.$valeur_get.',';
            }
            $i++;
        }
        Formulaire::PDO($sql);

    }
    
}
?>