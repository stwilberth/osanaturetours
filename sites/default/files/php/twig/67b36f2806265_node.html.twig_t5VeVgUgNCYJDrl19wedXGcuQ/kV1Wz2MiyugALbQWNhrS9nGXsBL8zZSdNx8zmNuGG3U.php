<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/bootstrap/templates/content/node.html.twig */
class __TwigTemplate_009706709bf55d3c77081b990a41aa7f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'submitted' => [$this, 'block_submitted'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap/node"), "html", null, true);
        yield "

";
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 75
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        yield ">
  <header>
    ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 78
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 79
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 79), "html", null, true);
            yield ">
        <a href=\"";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 83
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
    ";
        // line 84
        if (($context["display_submitted"] ?? null)) {
            // line 85
            yield "      <div class=\"node__meta\">
        ";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "
        ";
            // line 87
            yield from $this->unwrap()->yieldBlock('submitted', $context, $blocks);
            // line 92
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 95
        yield "  </header>
  <div";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 96), "html", null, true);
        yield ">
    ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "metadata", "content_attributes", "content", "author_attributes", "author_name", "date"]);        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submitted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "          <em";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
        yield ">
            ";
        // line 89
        yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
        // line 90
        yield "          </em>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap/templates/content/node.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  136 => 90,  134 => 89,  129 => 88,  122 => 87,  112 => 97,  108 => 96,  105 => 95,  98 => 92,  96 => 87,  92 => 86,  89 => 85,  87 => 84,  82 => 83,  74 => 80,  69 => 79,  67 => 78,  63 => 77,  57 => 75,  55 => 71,  54 => 70,  53 => 69,  52 => 68,  51 => 67,  50 => 65,  45 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap/templates/content/node.html.twig", "C:\\wamp64\\www\\osanaturetours\\themes\\contrib\\bootstrap\\templates\\content\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 65, "if" => 78, "block" => 87, "trans" => 89];
        static $filters = ["escape" => 62, "clean_class" => 67];
        static $functions = ["attach_library" => 62];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'trans'],
                ['escape', 'clean_class'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
