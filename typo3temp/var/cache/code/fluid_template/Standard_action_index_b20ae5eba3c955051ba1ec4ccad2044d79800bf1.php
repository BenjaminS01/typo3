<?php

class Standard_action_index_b20ae5eba3c955051ba1ec4ccad2044d79800bf1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<body>


    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg main-nav px-0">
                <a class="navbar-brand" href="">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('logo', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="menu icon"></div> 
                    </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuPrimary', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '
                </div>
            </nav>
        </div>
        <!-- /.container -->
    </header>
    <!--

    Wow! What do you want to build?

    You have so many possibilities right now... Looking for something to kick off?
    How about a simple folio page to show off everything you\'re going to make!
   
  -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->






    <div class="content">

        <div class="container">
            <div style="margin-bottom:50px;">
                <h1>';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Titel', $array7)]);

$output0 .= '</h1>
            </div>
        </div>


        <main>
            <div class="container">
                <div class="row">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array43 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array43);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output40 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output40 .= '</div>
                            <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array46);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output40 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output40 .= '</div>
                            <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;

$output40 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output40 .= '</div>
                        ';
return $output40;
};
$arguments38 = array();

$output37 .= '';

$output37 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;

$output55 .= isset($arguments56['value']) ? $arguments56['value'] : $renderChildrenClosure57();

$output55 .= '</div>
                            <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$array61 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array61);
};
$arguments59 = array();
$arguments59['value'] = NULL;

$output55 .= isset($arguments59['value']) ? $arguments59['value'] : $renderChildrenClosure60();

$output55 .= '</div>
                        ';
return $output55;
};
$arguments50 = array();
$arguments50['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);

$output37 .= '';

$output37 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                            <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$array67 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array67);
};
$arguments65 = array();
$arguments65['value'] = NULL;

$output64 .= isset($arguments65['value']) ? $arguments65['value'] : $renderChildrenClosure66();

$output64 .= '</div>
                        ';
return $output64;
};
$arguments62 = array();
$arguments62['if'] = NULL;

$output37 .= '';

$output37 .= '
                    ';
return $output37;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output10 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output10 .= '</div>
                            <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output10 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output10 .= '</div>
                            <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output10 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output10 .= '</div>
                        ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output20 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output20 .= '</div>
                            <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;

$output20 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output20 .= '</div>
                        ';
return $output20;
};
$arguments8['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array33);
};
$arguments31 = array();
$arguments31['value'] = NULL;

$output30 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output30 .= '</div>
                        ';
return $output30;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
                </div>
            </div>

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                    <br>
                    <hr>
                    <br>
                    <div class="column-wrapper">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$array173 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array173);
};
$arguments171 = array();
$arguments171['value'] = NULL;

$output170 .= isset($arguments171['value']) ? $arguments171['value'] : $renderChildrenClosure172();

$output170 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array176);
};
$arguments174 = array();
$arguments174['value'] = NULL;

$output170 .= isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output170 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$array179 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array179);
};
$arguments177 = array();
$arguments177['value'] = NULL;

$output170 .= isset($arguments177['value']) ? $arguments177['value'] : $renderChildrenClosure178();

$output170 .= '</div>
                                ';
return $output170;
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$array188 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array188);
};
$arguments186 = array();
$arguments186['value'] = NULL;

$output185 .= isset($arguments186['value']) ? $arguments186['value'] : $renderChildrenClosure187();

$output185 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$array191 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array191);
};
$arguments189 = array();
$arguments189['value'] = NULL;

$output185 .= isset($arguments189['value']) ? $arguments189['value'] : $renderChildrenClosure190();

$output185 .= '</div>
                                ';
return $output185;
};
$arguments180 = array();
$arguments180['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);

$output167 .= '';

$output167 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$array197 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array197);
};
$arguments195 = array();
$arguments195['value'] = NULL;

$output194 .= isset($arguments195['value']) ? $arguments195['value'] : $renderChildrenClosure196();

$output194 .= '</div>
                                ';
return $output194;
};
$arguments192 = array();
$arguments192['if'] = NULL;

$output167 .= '';

$output167 .= '
                            ';
return $output167;
};
$arguments138 = array();
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments138['__thenClosure'] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$array143 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array143);
};
$arguments141 = array();
$arguments141['value'] = NULL;

$output140 .= isset($arguments141['value']) ? $arguments141['value'] : $renderChildrenClosure142();

$output140 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$array146 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array146);
};
$arguments144 = array();
$arguments144['value'] = NULL;

$output140 .= isset($arguments144['value']) ? $arguments144['value'] : $renderChildrenClosure145();

$output140 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$array149 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array149);
};
$arguments147 = array();
$arguments147['value'] = NULL;

$output140 .= isset($arguments147['value']) ? $arguments147['value'] : $renderChildrenClosure148();

$output140 .= '</div>
                                ';
return $output140;
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$array153 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array153);
};
$arguments151 = array();
$arguments151['value'] = NULL;

$output150 .= isset($arguments151['value']) ? $arguments151['value'] : $renderChildrenClosure152();

$output150 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$array156 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array156);
};
$arguments154 = array();
$arguments154['value'] = NULL;

$output150 .= isset($arguments154['value']) ? $arguments154['value'] : $renderChildrenClosure155();

$output150 .= '</div>
                                ';
return $output150;
};
$arguments138['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array158);

$expression159 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
};
$arguments138['__elseClosures'][] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$array163 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array163);
};
$arguments161 = array();
$arguments161['value'] = NULL;

$output160 .= isset($arguments161['value']) ? $arguments161['value'] : $renderChildrenClosure162();

$output160 .= '</div>
                                ';
return $output160;
};

$output137 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                        </div>
                    </div>
                ';
return $output137;
};
$arguments135 = array();

$output134 .= '';

$output134 .= '
            ';
return $output134;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                    <br>
                    <hr>
                    <br>
                    <div class="column-wrapper">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array106);
};
$arguments104 = array();
$arguments104['value'] = NULL;

$output103 .= isset($arguments104['value']) ? $arguments104['value'] : $renderChildrenClosure105();

$output103 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$array109 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array109);
};
$arguments107 = array();
$arguments107['value'] = NULL;

$output103 .= isset($arguments107['value']) ? $arguments107['value'] : $renderChildrenClosure108();

$output103 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array112 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array112);
};
$arguments110 = array();
$arguments110['value'] = NULL;

$output103 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output103 .= '</div>
                                ';
return $output103;
};
$arguments101 = array();

$output100 .= '';

$output100 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output118 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output118 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output118 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output118 .= '</div>
                                ';
return $output118;
};
$arguments113 = array();
$arguments113['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);

$output100 .= '';

$output100 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output127 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output127 .= '</div>
                                ';
return $output127;
};
$arguments125 = array();
$arguments125['if'] = NULL;

$output100 .= '';

$output100 .= '
                            ';
return $output100;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output73 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output73 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output73 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output73 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array82 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array82);
};
$arguments80 = array();
$arguments80['value'] = NULL;

$output73 .= isset($arguments80['value']) ? $arguments80['value'] : $renderChildrenClosure81();

$output73 .= '</div>
                                ';
return $output73;
};
$arguments71['__elseClosures'][] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array86);
};
$arguments84 = array();
$arguments84['value'] = NULL;

$output83 .= isset($arguments84['value']) ? $arguments84['value'] : $renderChildrenClosure85();

$output83 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$array89 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array89);
};
$arguments87 = array();
$arguments87['value'] = NULL;

$output83 .= isset($arguments87['value']) ? $arguments87['value'] : $renderChildrenClosure88();

$output83 .= '</div>
                                ';
return $output83;
};
$arguments71['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
};
$arguments71['__elseClosures'][] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output93 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output93 .= '</div>
                                ';
return $output93;
};

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                        </div>
                    </div>
                ';
return $output70;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '



            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                    <br>

                    <br>
                    <div class="container">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
$array303 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array303);
};
$arguments301 = array();
$arguments301['value'] = NULL;

$output300 .= isset($arguments301['value']) ? $arguments301['value'] : $renderChildrenClosure302();

$output300 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$array306 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array306);
};
$arguments304 = array();
$arguments304['value'] = NULL;

$output300 .= isset($arguments304['value']) ? $arguments304['value'] : $renderChildrenClosure305();

$output300 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$array309 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array309);
};
$arguments307 = array();
$arguments307['value'] = NULL;

$output300 .= isset($arguments307['value']) ? $arguments307['value'] : $renderChildrenClosure308();

$output300 .= '</div>
                                ';
return $output300;
};
$arguments298 = array();

$output297 .= '';

$output297 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$array318 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array318);
};
$arguments316 = array();
$arguments316['value'] = NULL;

$output315 .= isset($arguments316['value']) ? $arguments316['value'] : $renderChildrenClosure317();

$output315 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$array321 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array321);
};
$arguments319 = array();
$arguments319['value'] = NULL;

$output315 .= isset($arguments319['value']) ? $arguments319['value'] : $renderChildrenClosure320();

$output315 .= '</div>
                                ';
return $output315;
};
$arguments310 = array();
$arguments310['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array312 = array();
$array313 = array (
);$array312['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array313);

$expression314 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments310['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression314(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array312)
					),
					$renderingContext
				);

$output297 .= '';

$output297 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$array327 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array327);
};
$arguments325 = array();
$arguments325['value'] = NULL;

$output324 .= isset($arguments325['value']) ? $arguments325['value'] : $renderChildrenClosure326();

$output324 .= '</div>
                                ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output297 .= '';

$output297 .= '
                            ';
return $output297;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$array273 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array273);
};
$arguments271 = array();
$arguments271['value'] = NULL;

$output270 .= isset($arguments271['value']) ? $arguments271['value'] : $renderChildrenClosure272();

$output270 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$array276 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array276);
};
$arguments274 = array();
$arguments274['value'] = NULL;

$output270 .= isset($arguments274['value']) ? $arguments274['value'] : $renderChildrenClosure275();

$output270 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array279);
};
$arguments277 = array();
$arguments277['value'] = NULL;

$output270 .= isset($arguments277['value']) ? $arguments277['value'] : $renderChildrenClosure278();

$output270 .= '</div>
                                ';
return $output270;
};
$arguments268['__elseClosures'][] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$array283 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array283);
};
$arguments281 = array();
$arguments281['value'] = NULL;

$output280 .= isset($arguments281['value']) ? $arguments281['value'] : $renderChildrenClosure282();

$output280 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$array286 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array286);
};
$arguments284 = array();
$arguments284['value'] = NULL;

$output280 .= isset($arguments284['value']) ? $arguments284['value'] : $renderChildrenClosure285();

$output280 .= '</div>
                                ';
return $output280;
};
$arguments268['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
};
$arguments268['__elseClosures'][] = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$array293 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array293);
};
$arguments291 = array();
$arguments291['value'] = NULL;

$output290 .= isset($arguments291['value']) ? $arguments291['value'] : $renderChildrenClosure292();

$output290 .= '</div>
                                ';
return $output290;
};

$output267 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                        </div>
                    </div>
                ';
return $output267;
};
$arguments265 = array();

$output264 .= '';

$output264 .= '
            ';
return $output264;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array262);

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
                    <br>

                    <br>
                    <div class="container">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array236);
};
$arguments234 = array();
$arguments234['value'] = NULL;

$output233 .= isset($arguments234['value']) ? $arguments234['value'] : $renderChildrenClosure235();

$output233 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$array239 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array239);
};
$arguments237 = array();
$arguments237['value'] = NULL;

$output233 .= isset($arguments237['value']) ? $arguments237['value'] : $renderChildrenClosure238();

$output233 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$array242 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array242);
};
$arguments240 = array();
$arguments240['value'] = NULL;

$output233 .= isset($arguments240['value']) ? $arguments240['value'] : $renderChildrenClosure241();

$output233 .= '</div>
                                ';
return $output233;
};
$arguments231 = array();

$output230 .= '';

$output230 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$array251 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array251);
};
$arguments249 = array();
$arguments249['value'] = NULL;

$output248 .= isset($arguments249['value']) ? $arguments249['value'] : $renderChildrenClosure250();

$output248 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array254 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array254);
};
$arguments252 = array();
$arguments252['value'] = NULL;

$output248 .= isset($arguments252['value']) ? $arguments252['value'] : $renderChildrenClosure253();

$output248 .= '</div>
                                ';
return $output248;
};
$arguments243 = array();
$arguments243['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array246);

$expression247 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments243['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);

$output230 .= '';

$output230 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$array260 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array260);
};
$arguments258 = array();
$arguments258['value'] = NULL;

$output257 .= isset($arguments258['value']) ? $arguments258['value'] : $renderChildrenClosure259();

$output257 .= '</div>
                                ';
return $output257;
};
$arguments255 = array();
$arguments255['if'] = NULL;

$output230 .= '';

$output230 .= '
                            ';
return $output230;
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array227 = array();
$array228 = array (
);$array227['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array228);

$expression229 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array227)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$array206 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array206);
};
$arguments204 = array();
$arguments204['value'] = NULL;

$output203 .= isset($arguments204['value']) ? $arguments204['value'] : $renderChildrenClosure205();

$output203 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$array209 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array209);
};
$arguments207 = array();
$arguments207['value'] = NULL;

$output203 .= isset($arguments207['value']) ? $arguments207['value'] : $renderChildrenClosure208();

$output203 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$array212 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array212);
};
$arguments210 = array();
$arguments210['value'] = NULL;

$output203 .= isset($arguments210['value']) ? $arguments210['value'] : $renderChildrenClosure211();

$output203 .= '</div>
                                ';
return $output203;
};
$arguments201['__elseClosures'][] = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array216);
};
$arguments214 = array();
$arguments214['value'] = NULL;

$output213 .= isset($arguments214['value']) ? $arguments214['value'] : $renderChildrenClosure215();

$output213 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$array219 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array219);
};
$arguments217 = array();
$arguments217['value'] = NULL;

$output213 .= isset($arguments217['value']) ? $arguments217['value'] : $renderChildrenClosure218();

$output213 .= '</div>
                                ';
return $output213;
};
$arguments201['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array221);

$expression222 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
};
$arguments201['__elseClosures'][] = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$array226 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array226);
};
$arguments224 = array();
$arguments224['value'] = NULL;

$output223 .= isset($arguments224['value']) ? $arguments224['value'] : $renderChildrenClosure225();

$output223 .= '</div>
                                ';
return $output223;
};

$output200 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
                        </div>
                    </div>
                ';
return $output200;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output0 .= '
        </main>

    </div>




    <footer class="page-footer font-small stylish-color-dark  pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="container">
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-sm-2" style="max-width: 15%;">
                        <div class="raindrop-solid icon"></div>
                    </div>
                    <div class="col-sm" style="max-width: 60%;">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$array330 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuSecondary', $array330);
};
$arguments328 = array();
$arguments328['value'] = NULL;

$output0 .= isset($arguments328['value']) ? $arguments328['value'] : $renderChildrenClosure329();

$output0 .= '
                    </div>

                    <!-- Content -->
                    <div class="col-sm-2" style="max-width: 15%;">
                        <div class="raindrop-solid icon"></div>
                    </div>
                </div>
            </div>

            <!-- Grid column -->


        </div>
        </div>

    </footer>
    <!-- Footer -->


</body>';

return $output0;
}


}
#