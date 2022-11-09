<?php declare(strict_types=1);

namespace DrupalRector\Rector\Deprecation;

use DrupalRector\Rector\Deprecation\Base\AssertLegacyTraitBase;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class AssertHeaderRector extends AssertLegacyTraitBase
{

    protected $deprecatedMethodName = 'assertHeader';
    protected $methodName = 'responseHeaderEquals';

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Fixes deprecated AssertLegacyTrait::assertHeader calls', [
            new CodeSample(
                <<<'CODE_BEFORE'
$this->assertHeader('Foo', 'Bar');
CODE_BEFORE
                ,
                <<<'CODE_AFTER'
$this->assertSession()->responseHeaderEquals('Foo', 'Bar');
CODE_AFTER
            )
        ]);
    }

}
