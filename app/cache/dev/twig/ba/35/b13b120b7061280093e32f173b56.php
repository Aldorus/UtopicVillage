<?php

/* ExodUtopicVillageBundle:Home:home.html.twig */
class __TwigTemplate_ba35b13b120b7061280093e32f173b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Le site sera bient&ocirc;t en ligne, en attendant vous pouvez telecharger l'application ici : <br/>

<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/exodutopicvillage/images/telechargerMoi.png"), "html", null, true);
        echo "\"/>
<a href=\"http://rousselguillaume.fr/apk/UtopicVillage.apk\">Ou bien encore ici</a>
";
    }

    public function getTemplateName()
    {
        return "ExodUtopicVillageBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  17 => 1,);
    }
}
