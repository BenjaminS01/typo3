<?php

class Standard_action_index_33302e1e867c55008140b87ca2024e9b2f64c9bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

    <div class="title-wrapper">
        <header class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg main-nav px-0">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="menu icon"></div> 
                    </button>
                    <div class="collapse navbar-collapse" id="mainMenu">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuPrimary', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
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




        </div>

        <div class="content">

            <div class="language-wrapper">
                <div class="language">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('language', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '
                </div>
            </div>

            <div style="margin-bottom:50px;  ">
                <div class="title">

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('title', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;

$output0 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output0 .= '

                </div>

            </div>



            <main>
                <div class="container">
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '</div>
                                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output42 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output42 .= '</div>
                                <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$array51 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array51);
};
$arguments49 = array();
$arguments49['value'] = NULL;

$output42 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output42 .= '</div>
                            ';
return $output42;
};
$arguments40 = array();

$output39 .= '';

$output39 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output57 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output57 .= '</div>
                                <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array63);
};
$arguments61 = array();
$arguments61['value'] = NULL;

$output57 .= isset($arguments61['value']) ? $arguments61['value'] : $renderChildrenClosure62();

$output57 .= '</div>
                            ';
return $output57;
};
$arguments52 = array();
$arguments52['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);

$output39 .= '';

$output39 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$array69 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array69);
};
$arguments67 = array();
$arguments67['value'] = NULL;

$output66 .= isset($arguments67['value']) ? $arguments67['value'] : $renderChildrenClosure68();

$output66 .= '</div>
                            ';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output39 .= '';

$output39 .= '
                        ';
return $output39;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                                <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output12 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output12 .= '</div>
                                <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output12 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output12 .= '</div>
                                <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array21 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array21);
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output12 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output12 .= '</div>
                            ';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                                <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output22 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output22 .= '</div>
                                <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output22 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output22 .= '</div>
                            ';
return $output22;
};
$arguments10['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                                <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array35 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array35);
};
$arguments33 = array();
$arguments33['value'] = NULL;

$output32 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();

$output32 .= '</div>
                            ';
return $output32;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                    </div>
                </div>

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                        <br>
                        <hr>
                        <br>
                        <div class="column-wrapper">
                            <div class="row">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array175);
};
$arguments173 = array();
$arguments173['value'] = NULL;

$output172 .= isset($arguments173['value']) ? $arguments173['value'] : $renderChildrenClosure174();

$output172 .= '</div>
                                        <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$array178 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array178);
};
$arguments176 = array();
$arguments176['value'] = NULL;

$output172 .= isset($arguments176['value']) ? $arguments176['value'] : $renderChildrenClosure177();

$output172 .= '</div>
                                        <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array181 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array181);
};
$arguments179 = array();
$arguments179['value'] = NULL;

$output172 .= isset($arguments179['value']) ? $arguments179['value'] : $renderChildrenClosure180();

$output172 .= '</div>
                                    ';
return $output172;
};
$arguments170 = array();

$output169 .= '';

$output169 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array190 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array190);
};
$arguments188 = array();
$arguments188['value'] = NULL;

$output187 .= isset($arguments188['value']) ? $arguments188['value'] : $renderChildrenClosure189();

$output187 .= '</div>
                                        <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$array193 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array193);
};
$arguments191 = array();
$arguments191['value'] = NULL;

$output187 .= isset($arguments191['value']) ? $arguments191['value'] : $renderChildrenClosure192();

$output187 .= '</div>
                                    ';
return $output187;
};
$arguments182 = array();
$arguments182['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array185);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);

$output169 .= '';

$output169 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                        <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$array199 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array199);
};
$arguments197 = array();
$arguments197['value'] = NULL;

$output196 .= isset($arguments197['value']) ? $arguments197['value'] : $renderChildrenClosure198();

$output196 .= '</div>
                                    ';
return $output196;
};
$arguments194 = array();
$arguments194['if'] = NULL;

$output169 .= '';

$output169 .= '
                                ';
return $output169;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array167);

$expression168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$array145 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array145);
};
$arguments143 = array();
$arguments143['value'] = NULL;

$output142 .= isset($arguments143['value']) ? $arguments143['value'] : $renderChildrenClosure144();

$output142 .= '</div>
                                        <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array148);
};
$arguments146 = array();
$arguments146['value'] = NULL;

$output142 .= isset($arguments146['value']) ? $arguments146['value'] : $renderChildrenClosure147();

$output142 .= '</div>
                                        <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$array151 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array151);
};
$arguments149 = array();
$arguments149['value'] = NULL;

$output142 .= isset($arguments149['value']) ? $arguments149['value'] : $renderChildrenClosure150();

$output142 .= '</div>
                                    ';
return $output142;
};
$arguments140['__elseClosures'][] = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$array155 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array155);
};
$arguments153 = array();
$arguments153['value'] = NULL;

$output152 .= isset($arguments153['value']) ? $arguments153['value'] : $renderChildrenClosure154();

$output152 .= '</div>
                                        <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$array158 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array158);
};
$arguments156 = array();
$arguments156['value'] = NULL;

$output152 .= isset($arguments156['value']) ? $arguments156['value'] : $renderChildrenClosure157();

$output152 .= '</div>
                                    ';
return $output152;
};
$arguments140['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
};
$arguments140['__elseClosures'][] = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                                        <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array165 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array165);
};
$arguments163 = array();
$arguments163['value'] = NULL;

$output162 .= isset($arguments163['value']) ? $arguments163['value'] : $renderChildrenClosure164();

$output162 .= '</div>
                                    ';
return $output162;
};

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                            </div>
                        </div>
                    ';
return $output139;
};
$arguments137 = array();

$output136 .= '';

$output136 .= '
                ';
return $output136;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array134);

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                        <br>
                        <hr>
                        <br>
                        <div class="column-wrapper">
                            <div class="row">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output105 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output105 .= '</div>
                                        <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output105 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output105 .= '</div>
                                        <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array114);
};
$arguments112 = array();
$arguments112['value'] = NULL;

$output105 .= isset($arguments112['value']) ? $arguments112['value'] : $renderChildrenClosure113();

$output105 .= '</div>
                                    ';
return $output105;
};
$arguments103 = array();

$output102 .= '';

$output102 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array123 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array123);
};
$arguments121 = array();
$arguments121['value'] = NULL;

$output120 .= isset($arguments121['value']) ? $arguments121['value'] : $renderChildrenClosure122();

$output120 .= '</div>
                                        <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$array126 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array126);
};
$arguments124 = array();
$arguments124['value'] = NULL;

$output120 .= isset($arguments124['value']) ? $arguments124['value'] : $renderChildrenClosure125();

$output120 .= '</div>
                                    ';
return $output120;
};
$arguments115 = array();
$arguments115['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);

$output102 .= '';

$output102 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                                        <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array132 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array132);
};
$arguments130 = array();
$arguments130['value'] = NULL;

$output129 .= isset($arguments130['value']) ? $arguments130['value'] : $renderChildrenClosure131();

$output129 .= '</div>
                                    ';
return $output129;
};
$arguments127 = array();
$arguments127['if'] = NULL;

$output102 .= '';

$output102 .= '
                                ';
return $output102;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array78);
};
$arguments76 = array();
$arguments76['value'] = NULL;

$output75 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output75 .= '</div>
                                        <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array81);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output75 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output75 .= '</div>
                                        <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output75 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output75 .= '</div>
                                    ';
return $output75;
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                                        <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$array88 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array88);
};
$arguments86 = array();
$arguments86['value'] = NULL;

$output85 .= isset($arguments86['value']) ? $arguments86['value'] : $renderChildrenClosure87();

$output85 .= '</div>
                                        <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output85 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output85 .= '</div>
                                    ';
return $output85;
};
$arguments73['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                                        <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output95 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output95 .= '</div>
                                    ';
return $output95;
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                            </div>
                        </div>
                    ';
return $output72;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output0 .= '



                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                        <br>

                        <br>
                        <div class="container">
                            <div class="row">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$array305 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array305);
};
$arguments303 = array();
$arguments303['value'] = NULL;

$output302 .= isset($arguments303['value']) ? $arguments303['value'] : $renderChildrenClosure304();

$output302 .= '</div>
                                        <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$array308 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array308);
};
$arguments306 = array();
$arguments306['value'] = NULL;

$output302 .= isset($arguments306['value']) ? $arguments306['value'] : $renderChildrenClosure307();

$output302 .= '</div>
                                        <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$array311 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array311);
};
$arguments309 = array();
$arguments309['value'] = NULL;

$output302 .= isset($arguments309['value']) ? $arguments309['value'] : $renderChildrenClosure310();

$output302 .= '</div>
                                    ';
return $output302;
};
$arguments300 = array();

$output299 .= '';

$output299 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$array320 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array320);
};
$arguments318 = array();
$arguments318['value'] = NULL;

$output317 .= isset($arguments318['value']) ? $arguments318['value'] : $renderChildrenClosure319();

$output317 .= '</div>
                                        <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$array323 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array323);
};
$arguments321 = array();
$arguments321['value'] = NULL;

$output317 .= isset($arguments321['value']) ? $arguments321['value'] : $renderChildrenClosure322();

$output317 .= '</div>
                                    ';
return $output317;
};
$arguments312 = array();
$arguments312['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array315);

$expression316 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments312['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression316(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array314)
					),
					$renderingContext
				);

$output299 .= '';

$output299 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= '
                                        <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$array329 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array329);
};
$arguments327 = array();
$arguments327['value'] = NULL;

$output326 .= isset($arguments327['value']) ? $arguments327['value'] : $renderChildrenClosure328();

$output326 .= '</div>
                                    ';
return $output326;
};
$arguments324 = array();
$arguments324['if'] = NULL;

$output299 .= '';

$output299 .= '
                                ';
return $output299;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array297);

$expression298 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression298(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array296)
					),
					$renderingContext
				);
$arguments270['__thenClosure'] = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array275 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array275);
};
$arguments273 = array();
$arguments273['value'] = NULL;

$output272 .= isset($arguments273['value']) ? $arguments273['value'] : $renderChildrenClosure274();

$output272 .= '</div>
                                        <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array278);
};
$arguments276 = array();
$arguments276['value'] = NULL;

$output272 .= isset($arguments276['value']) ? $arguments276['value'] : $renderChildrenClosure277();

$output272 .= '</div>
                                        <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$array281 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array281);
};
$arguments279 = array();
$arguments279['value'] = NULL;

$output272 .= isset($arguments279['value']) ? $arguments279['value'] : $renderChildrenClosure280();

$output272 .= '</div>
                                    ';
return $output272;
};
$arguments270['__elseClosures'][] = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array285);
};
$arguments283 = array();
$arguments283['value'] = NULL;

$output282 .= isset($arguments283['value']) ? $arguments283['value'] : $renderChildrenClosure284();

$output282 .= '</div>
                                        <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$array288 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array288);
};
$arguments286 = array();
$arguments286['value'] = NULL;

$output282 .= isset($arguments286['value']) ? $arguments286['value'] : $renderChildrenClosure287();

$output282 .= '</div>
                                    ';
return $output282;
};
$arguments270['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
};
$arguments270['__elseClosures'][] = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                                        <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$array295 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array295);
};
$arguments293 = array();
$arguments293['value'] = NULL;

$output292 .= isset($arguments293['value']) ? $arguments293['value'] : $renderChildrenClosure294();

$output292 .= '</div>
                                    ';
return $output292;
};

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '
                            </div>
                        </div>
                    ';
return $output269;
};
$arguments267 = array();

$output266 .= '';

$output266 .= '
                ';
return $output266;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array264);

$expression265 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                        <br>

                        <br>
                        <div class="container">
                            <div class="row">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$array238 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array238);
};
$arguments236 = array();
$arguments236['value'] = NULL;

$output235 .= isset($arguments236['value']) ? $arguments236['value'] : $renderChildrenClosure237();

$output235 .= '</div>
                                        <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array241 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array241);
};
$arguments239 = array();
$arguments239['value'] = NULL;

$output235 .= isset($arguments239['value']) ? $arguments239['value'] : $renderChildrenClosure240();

$output235 .= '</div>
                                        <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$array244 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array244);
};
$arguments242 = array();
$arguments242['value'] = NULL;

$output235 .= isset($arguments242['value']) ? $arguments242['value'] : $renderChildrenClosure243();

$output235 .= '</div>
                                    ';
return $output235;
};
$arguments233 = array();

$output232 .= '';

$output232 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$array253 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array253);
};
$arguments251 = array();
$arguments251['value'] = NULL;

$output250 .= isset($arguments251['value']) ? $arguments251['value'] : $renderChildrenClosure252();

$output250 .= '</div>
                                        <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$array256 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array256);
};
$arguments254 = array();
$arguments254['value'] = NULL;

$output250 .= isset($arguments254['value']) ? $arguments254['value'] : $renderChildrenClosure255();

$output250 .= '</div>
                                    ';
return $output250;
};
$arguments245 = array();
$arguments245['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array248);

$expression249 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments245['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);

$output232 .= '';

$output232 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
                                        <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$array262 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array262);
};
$arguments260 = array();
$arguments260['value'] = NULL;

$output259 .= isset($arguments260['value']) ? $arguments260['value'] : $renderChildrenClosure261();

$output259 .= '</div>
                                    ';
return $output259;
};
$arguments257 = array();
$arguments257['if'] = NULL;

$output232 .= '';

$output232 .= '
                                ';
return $output232;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$array208 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array208);
};
$arguments206 = array();
$arguments206['value'] = NULL;

$output205 .= isset($arguments206['value']) ? $arguments206['value'] : $renderChildrenClosure207();

$output205 .= '</div>
                                        <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array211 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array211);
};
$arguments209 = array();
$arguments209['value'] = NULL;

$output205 .= isset($arguments209['value']) ? $arguments209['value'] : $renderChildrenClosure210();

$output205 .= '</div>
                                        <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$array214 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array214);
};
$arguments212 = array();
$arguments212['value'] = NULL;

$output205 .= isset($arguments212['value']) ? $arguments212['value'] : $renderChildrenClosure213();

$output205 .= '</div>
                                    ';
return $output205;
};
$arguments203['__elseClosures'][] = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                                        <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$array218 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array218);
};
$arguments216 = array();
$arguments216['value'] = NULL;

$output215 .= isset($arguments216['value']) ? $arguments216['value'] : $renderChildrenClosure217();

$output215 .= '</div>
                                        <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$array221 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array221);
};
$arguments219 = array();
$arguments219['value'] = NULL;

$output215 .= isset($arguments219['value']) ? $arguments219['value'] : $renderChildrenClosure220();

$output215 .= '</div>
                                    ';
return $output215;
};
$arguments203['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array223);

$expression224 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
};
$arguments203['__elseClosures'][] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                                        <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$array228 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array228);
};
$arguments226 = array();
$arguments226['value'] = NULL;

$output225 .= isset($arguments226['value']) ? $arguments226['value'] : $renderChildrenClosure227();

$output225 .= '</div>
                                    ';
return $output225;
};

$output202 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output202 .= '
                            </div>
                        </div>
                    ';
return $output202;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

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
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$array332 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuSecondary', $array332);
};
$arguments330 = array();
$arguments330['value'] = NULL;

$output0 .= isset($arguments330['value']) ? $arguments330['value'] : $renderChildrenClosure331();

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