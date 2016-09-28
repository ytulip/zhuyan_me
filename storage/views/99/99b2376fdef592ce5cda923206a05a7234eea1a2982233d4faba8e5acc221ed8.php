<?php

/* workdetail.html */
class __TwigTemplate_c25dbb5a1b9e46d908fed9f85bc4b490021720daf25cfe13e70d6af8cf4d5983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html", "workdetail.html", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'function' => array($this, 'block_function'),
            'contentwrap' => array($this, 'block_contentwrap'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "<style>
#work-detail-panel{
    text-align: center;
}
.detail-img{
    max-width: 100%;
    margin-bottom: 28px;
}

#scrollUp {
    background-color: #777;
    color: #eee;
    font-size: 40px;
    line-height: 1;
    text-align: center;
    text-decoration: none;
    bottom: 20px;
    right: 20px;
    overflow: hidden;
    width: 46px;
    height: 46px;
    border: none;
    opacity: .8;
}
</style>
";
    }

    // line 29
    public function block_function($context, array $blocks = array())
    {
        echo "WORK DETAIL<button class=\"button button-large button-plain button-border button-square\" id=\"work-delete\"><i class=\"fa fa-save\" id=\"work-detail-save\"></i></button><input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" placeholder=\"describe this work\">";
    }

    // line 30
    public function block_contentwrap($context, array $blocks = array())
    {
        // line 31
        echo "<input type=\"hidden\" name=\"id\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
<div class=\"row\" id=\"work-detail-panel\">
    <!--<img class=\"detail-img\" new-img=\"1\" src=\"/images/work/1472173877.jpg\">-->
    <div style=\"padding: 15px;\">
        <div class=\"form-control\" id=\"describe\" rows=\"3\" style=\"overflow-y:visible ;min-height: 90px;height: auto;text-align: left;\" contenteditable=\"true\">";
        // line 35
        echo (isset($context["describe"]) ? $context["describe"] : null);
        echo "</div>
        </div>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imgs"]) ? $context["imgs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 38
            echo "    <img class=\"detail-img\" src=\"";
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\" new-img=\"";
            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
";
    }

    // line 42
    public function block_script($context, array $blocks = array())
    {
        // line 43
        echo "<script src=\"/public/js/workdetail.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "workdetail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  107 => 42,  102 => 40,  91 => 38,  87 => 37,  82 => 35,  74 => 31,  71 => 30,  63 => 29,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "master.html" %}*/
/* {% block style %}*/
/* <style>*/
/* #work-detail-panel{*/
/*     text-align: center;*/
/* }*/
/* .detail-img{*/
/*     max-width: 100%;*/
/*     margin-bottom: 28px;*/
/* }*/
/* */
/* #scrollUp {*/
/*     background-color: #777;*/
/*     color: #eee;*/
/*     font-size: 40px;*/
/*     line-height: 1;*/
/*     text-align: center;*/
/*     text-decoration: none;*/
/*     bottom: 20px;*/
/*     right: 20px;*/
/*     overflow: hidden;*/
/*     width: 46px;*/
/*     height: 46px;*/
/*     border: none;*/
/*     opacity: .8;*/
/* }*/
/* </style>*/
/* {% endblock%}*/
/* {% block function %}WORK DETAIL<button class="button button-large button-plain button-border button-square" id="work-delete"><i class="fa fa-save" id="work-detail-save"></i></button><input type="text" class="form-control" name="title" value="{{ title }}" placeholder="describe this work">{% endblock %}*/
/* {% block contentwrap %}*/
/* <input type="hidden" name="id" value="{{ id }}"/>*/
/* <div class="row" id="work-detail-panel">*/
/*     <!--<img class="detail-img" new-img="1" src="/images/work/1472173877.jpg">-->*/
/*     <div style="padding: 15px;">*/
/*         <div class="form-control" id="describe" rows="3" style="overflow-y:visible ;min-height: 90px;height: auto;text-align: left;" contenteditable="true">{{ describe|raw  }}</div>*/
/*         </div>*/
/*     {% for img in imgs%}*/
/*     <img class="detail-img" src="{{ img }}" new-img="{{ img }}"/>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endblock %}*/
/* {% block script %}*/
/* <script src="/public/js/workdetail.js"></script>*/
/* {% endblock %}*/
