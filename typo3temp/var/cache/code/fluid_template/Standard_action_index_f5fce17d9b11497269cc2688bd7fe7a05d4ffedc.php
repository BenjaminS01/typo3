<?php

class Standard_action_index_f5fce17d9b11497269cc2688bd7fe7a05d4ffedc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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




    </div>

    <div class="content">


        <div style="margin-bottom:50px;">
            <div class="title">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('title', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output0 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output0 .= '</div>
        </div>



        <main>
            <div class="container">
                <div class="row">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array42);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output39 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output39 .= '</div>
                            <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;

$output39 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output39 .= '</div>
                            <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output39 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output39 .= '</div>
                        ';
return $output39;
};
$arguments37 = array();

$output36 .= '';

$output36 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output54 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output54 .= '</div>
                            <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array60);
};
$arguments58 = array();
$arguments58['value'] = NULL;

$output54 .= isset($arguments58['value']) ? $arguments58['value'] : $renderChildrenClosure59();

$output54 .= '</div>
                        ';
return $output54;
};
$arguments49 = array();
$arguments49['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output36 .= '';

$output36 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                            <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$array66 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array66);
};
$arguments64 = array();
$arguments64['value'] = NULL;

$output63 .= isset($arguments64['value']) ? $arguments64['value'] : $renderChildrenClosure65();

$output63 .= '</div>
                        ';
return $output63;
};
$arguments61 = array();
$arguments61['if'] = NULL;

$output36 .= '';

$output36 .= '
                    ';
return $output36;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;

$output9 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output9 .= '</div>
                            <div class="col-md-4 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array15);
};
$arguments13 = array();
$arguments13['value'] = NULL;

$output9 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output9 .= '</div>
                            <div class="col-md-4 content-right">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output9 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output9 .= '</div>
                        ';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                            <div class="col-md-4 content-left">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output19 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output19 .= '</div>
                            <div class="col-md-8 content-margin">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin', $array25);
};
$arguments23 = array();
$arguments23['value'] = NULL;

$output19 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output19 .= '</div>
                        ';
return $output19;
};
$arguments7['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
                            <div class="col-md-12 content-main">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain', $array32);
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '</div>
                        ';
return $output29;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
                </div>
            </div>

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                    <br>
                    <hr>
                    <br>
                    <div class="column-wrapper">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output169 = '';

$output169 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$array172 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array172);
};
$arguments170 = array();
$arguments170['value'] = NULL;

$output169 .= isset($arguments170['value']) ? $arguments170['value'] : $renderChildrenClosure171();

$output169 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$array175 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array175);
};
$arguments173 = array();
$arguments173['value'] = NULL;

$output169 .= isset($arguments173['value']) ? $arguments173['value'] : $renderChildrenClosure174();

$output169 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$array178 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array178);
};
$arguments176 = array();
$arguments176['value'] = NULL;

$output169 .= isset($arguments176['value']) ? $arguments176['value'] : $renderChildrenClosure177();

$output169 .= '</div>
                                ';
return $output169;
};
$arguments167 = array();

$output166 .= '';

$output166 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array187);
};
$arguments185 = array();
$arguments185['value'] = NULL;

$output184 .= isset($arguments185['value']) ? $arguments185['value'] : $renderChildrenClosure186();

$output184 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$array190 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array190);
};
$arguments188 = array();
$arguments188['value'] = NULL;

$output184 .= isset($arguments188['value']) ? $arguments188['value'] : $renderChildrenClosure189();

$output184 .= '</div>
                                ';
return $output184;
};
$arguments179 = array();
$arguments179['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array182);

$expression183 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments179['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression183(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);

$output166 .= '';

$output166 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$array196 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array196);
};
$arguments194 = array();
$arguments194['value'] = NULL;

$output193 .= isset($arguments194['value']) ? $arguments194['value'] : $renderChildrenClosure195();

$output193 .= '</div>
                                ';
return $output193;
};
$arguments191 = array();
$arguments191['if'] = NULL;

$output166 .= '';

$output166 .= '
                            ';
return $output166;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array164);

$expression165 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments137['__thenClosure'] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$array142 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array142);
};
$arguments140 = array();
$arguments140['value'] = NULL;

$output139 .= isset($arguments140['value']) ? $arguments140['value'] : $renderChildrenClosure141();

$output139 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$array145 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array145);
};
$arguments143 = array();
$arguments143['value'] = NULL;

$output139 .= isset($arguments143['value']) ? $arguments143['value'] : $renderChildrenClosure144();

$output139 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array148);
};
$arguments146 = array();
$arguments146['value'] = NULL;

$output139 .= isset($arguments146['value']) ? $arguments146['value'] : $renderChildrenClosure147();

$output139 .= '</div>
                                ';
return $output139;
};
$arguments137['__elseClosures'][] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$array152 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array152);
};
$arguments150 = array();
$arguments150['value'] = NULL;

$output149 .= isset($arguments150['value']) ? $arguments150['value'] : $renderChildrenClosure151();

$output149 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$array155 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array155);
};
$arguments153 = array();
$arguments153['value'] = NULL;

$output149 .= isset($arguments153['value']) ? $arguments153['value'] : $renderChildrenClosure154();

$output149 .= '</div>
                                ';
return $output149;
};
$arguments137['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
};
$arguments137['__elseClosures'][] = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$array162 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array162);
};
$arguments160 = array();
$arguments160['value'] = NULL;

$output159 .= isset($arguments160['value']) ? $arguments160['value'] : $renderChildrenClosure161();

$output159 .= '</div>
                                ';
return $output159;
};

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
                        </div>
                    </div>
                ';
return $output136;
};
$arguments134 = array();

$output133 .= '';

$output133 .= '
            ';
return $output133;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array131);

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                    <br>
                    <hr>
                    <br>
                    <div class="column-wrapper">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output102 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output102 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output102 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output102 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array111);
};
$arguments109 = array();
$arguments109['value'] = NULL;

$output102 .= isset($arguments109['value']) ? $arguments109['value'] : $renderChildrenClosure110();

$output102 .= '</div>
                                ';
return $output102;
};
$arguments100 = array();

$output99 .= '';

$output99 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output117 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output117 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array123 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array123);
};
$arguments121 = array();
$arguments121['value'] = NULL;

$output117 .= isset($arguments121['value']) ? $arguments121['value'] : $renderChildrenClosure122();

$output117 .= '</div>
                                ';
return $output117;
};
$arguments112 = array();
$arguments112['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);

$output99 .= '';

$output99 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array129);
};
$arguments127 = array();
$arguments127['value'] = NULL;

$output126 .= isset($arguments127['value']) ? $arguments127['value'] : $renderChildrenClosure128();

$output126 .= '</div>
                                ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output99 .= '';

$output99 .= '
                            ';
return $output99;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight2', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$array75 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array75);
};
$arguments73 = array();
$arguments73['value'] = NULL;

$output72 .= isset($arguments73['value']) ? $arguments73['value'] : $renderChildrenClosure74();

$output72 .= '</div>
                                    <div class="col-md-4 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array78);
};
$arguments76 = array();
$arguments76['value'] = NULL;

$output72 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output72 .= '</div>
                                    <div class="col-md-4 content-right2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight2', $array81);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output72 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output72 .= '</div>
                                ';
return $output72;
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                    <div class="col-md-4 content-left2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft2', $array85);
};
$arguments83 = array();
$arguments83['value'] = NULL;

$output82 .= isset($arguments83['value']) ? $arguments83['value'] : $renderChildrenClosure84();

$output82 .= '</div>
                                    <div class="col-md-8 content-margin2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$array88 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array88);
};
$arguments86 = array();
$arguments86['value'] = NULL;

$output82 .= isset($arguments86['value']) ? $arguments86['value'] : $renderChildrenClosure87();

$output82 .= '</div>
                                ';
return $output82;
};
$arguments70['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin2', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
                                    <div class="col-md-12 content-main2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain2', $array95);
};
$arguments93 = array();
$arguments93['value'] = NULL;

$output92 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output92 .= '</div>
                                ';
return $output92;
};

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
                        </div>
                    </div>
                ';
return $output69;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output0 .= '



            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                    <br>

                    <br>
                    <div class="container">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$array302 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array302);
};
$arguments300 = array();
$arguments300['value'] = NULL;

$output299 .= isset($arguments300['value']) ? $arguments300['value'] : $renderChildrenClosure301();

$output299 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$array305 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array305);
};
$arguments303 = array();
$arguments303['value'] = NULL;

$output299 .= isset($arguments303['value']) ? $arguments303['value'] : $renderChildrenClosure304();

$output299 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$array308 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array308);
};
$arguments306 = array();
$arguments306['value'] = NULL;

$output299 .= isset($arguments306['value']) ? $arguments306['value'] : $renderChildrenClosure307();

$output299 .= '</div>
                                ';
return $output299;
};
$arguments297 = array();

$output296 .= '';

$output296 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$array317 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array317);
};
$arguments315 = array();
$arguments315['value'] = NULL;

$output314 .= isset($arguments315['value']) ? $arguments315['value'] : $renderChildrenClosure316();

$output314 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$array320 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array320);
};
$arguments318 = array();
$arguments318['value'] = NULL;

$output314 .= isset($arguments318['value']) ? $arguments318['value'] : $renderChildrenClosure319();

$output314 .= '</div>
                                ';
return $output314;
};
$arguments309 = array();
$arguments309['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array312);

$expression313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments309['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array311)
					),
					$renderingContext
				);

$output296 .= '';

$output296 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$array326 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array326);
};
$arguments324 = array();
$arguments324['value'] = NULL;

$output323 .= isset($arguments324['value']) ? $arguments324['value'] : $renderChildrenClosure325();

$output323 .= '</div>
                                ';
return $output323;
};
$arguments321 = array();
$arguments321['if'] = NULL;

$output296 .= '';

$output296 .= '
                            ';
return $output296;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array294);

$expression295 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$array272 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array272);
};
$arguments270 = array();
$arguments270['value'] = NULL;

$output269 .= isset($arguments270['value']) ? $arguments270['value'] : $renderChildrenClosure271();

$output269 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array275 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array275);
};
$arguments273 = array();
$arguments273['value'] = NULL;

$output269 .= isset($arguments273['value']) ? $arguments273['value'] : $renderChildrenClosure274();

$output269 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$array278 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array278);
};
$arguments276 = array();
$arguments276['value'] = NULL;

$output269 .= isset($arguments276['value']) ? $arguments276['value'] : $renderChildrenClosure277();

$output269 .= '</div>
                                ';
return $output269;
};
$arguments267['__elseClosures'][] = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$array282 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array282);
};
$arguments280 = array();
$arguments280['value'] = NULL;

$output279 .= isset($arguments280['value']) ? $arguments280['value'] : $renderChildrenClosure281();

$output279 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array285 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array285);
};
$arguments283 = array();
$arguments283['value'] = NULL;

$output279 .= isset($arguments283['value']) ? $arguments283['value'] : $renderChildrenClosure284();

$output279 .= '</div>
                                ';
return $output279;
};
$arguments267['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
};
$arguments267['__elseClosures'][] = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$array292 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array292);
};
$arguments290 = array();
$arguments290['value'] = NULL;

$output289 .= isset($arguments290['value']) ? $arguments290['value'] : $renderChildrenClosure291();

$output289 .= '</div>
                                ';
return $output289;
};

$output266 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
                        </div>
                    </div>
                ';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
            ';
return $output263;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array261);

$expression262 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                    <br>

                    <br>
                    <div class="container">
                        <div class="row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$array235 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array235);
};
$arguments233 = array();
$arguments233['value'] = NULL;

$output232 .= isset($arguments233['value']) ? $arguments233['value'] : $renderChildrenClosure234();

$output232 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$array238 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array238);
};
$arguments236 = array();
$arguments236['value'] = NULL;

$output232 .= isset($arguments236['value']) ? $arguments236['value'] : $renderChildrenClosure237();

$output232 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$array241 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array241);
};
$arguments239 = array();
$arguments239['value'] = NULL;

$output232 .= isset($arguments239['value']) ? $arguments239['value'] : $renderChildrenClosure240();

$output232 .= '</div>
                                ';
return $output232;
};
$arguments230 = array();

$output229 .= '';

$output229 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$array250 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array250);
};
$arguments248 = array();
$arguments248['value'] = NULL;

$output247 .= isset($arguments248['value']) ? $arguments248['value'] : $renderChildrenClosure249();

$output247 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$array253 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array253);
};
$arguments251 = array();
$arguments251['value'] = NULL;

$output247 .= isset($arguments251['value']) ? $arguments251['value'] : $renderChildrenClosure252();

$output247 .= '</div>
                                ';
return $output247;
};
$arguments242 = array();
$arguments242['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array245);

$expression246 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments242['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);

$output229 .= '';

$output229 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$array259 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array259);
};
$arguments257 = array();
$arguments257['value'] = NULL;

$output256 .= isset($arguments257['value']) ? $arguments257['value'] : $renderChildrenClosure258();

$output256 .= '</div>
                                ';
return $output256;
};
$arguments254 = array();
$arguments254['if'] = NULL;

$output229 .= '';

$output229 .= '
                            ';
return $output229;
};
$arguments200 = array();
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('contentRight3', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$array205 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array205);
};
$arguments203 = array();
$arguments203['value'] = NULL;

$output202 .= isset($arguments203['value']) ? $arguments203['value'] : $renderChildrenClosure204();

$output202 .= '</div>
                                    <div class="col-md-4 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$array208 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array208);
};
$arguments206 = array();
$arguments206['value'] = NULL;

$output202 .= isset($arguments206['value']) ? $arguments206['value'] : $renderChildrenClosure207();

$output202 .= '</div>
                                    <div class="col-md-4 content-righ3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$array211 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentRight3', $array211);
};
$arguments209 = array();
$arguments209['value'] = NULL;

$output202 .= isset($arguments209['value']) ? $arguments209['value'] : $renderChildrenClosure210();

$output202 .= '</div>
                                ';
return $output202;
};
$arguments200['__elseClosures'][] = function() use ($renderingContext, $self) {
$output212 = '';

$output212 .= '
                                    <div class="col-md-4 content-left3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$array215 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentLeft3', $array215);
};
$arguments213 = array();
$arguments213['value'] = NULL;

$output212 .= isset($arguments213['value']) ? $arguments213['value'] : $renderChildrenClosure214();

$output212 .= '</div>
                                    <div class="col-md-8 content-margin3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$array218 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array218);
};
$arguments216 = array();
$arguments216['value'] = NULL;

$output212 .= isset($arguments216['value']) ? $arguments216['value'] : $renderChildrenClosure217();

$output212 .= '</div>
                                ';
return $output212;
};
$arguments200['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('contentMargin3', $array220);

$expression221 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array219)
					),
					$renderingContext
				);
};
$arguments200['__elseClosures'][] = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
                                    <div class="col-md-12 content-main3">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$array225 = array (
);return $renderingContext->getVariableProvider()->getByPath('contentMain3', $array225);
};
$arguments223 = array();
$arguments223['value'] = NULL;

$output222 .= isset($arguments223['value']) ? $arguments223['value'] : $renderChildrenClosure224();

$output222 .= '</div>
                                ';
return $output222;
};

$output199 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                        </div>
                    </div>
                ';
return $output199;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

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
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$array329 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuSecondary', $array329);
};
$arguments327 = array();
$arguments327['value'] = NULL;

$output0 .= isset($arguments327['value']) ? $arguments327['value'] : $renderChildrenClosure328();

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