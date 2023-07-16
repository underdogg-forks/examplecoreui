<?php

declare(strict_types=1);

use PHPStan\Type\ArrayType;
use PHPStan\Type\MixedType;
use PHPStan\Type\StringType;
use Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector;
use Rector\CodeQuality\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToArrayFilterRector;
use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToCoalescingRector;
use Rector\CodeQuality\Rector\FunctionLike\SimplifyUselessVariableRector;
use Rector\CodeQuality\Rector\Identical\SimplifyConditionsRector;
use Rector\CodeQuality\Rector\If_\SimplifyIfElseToTernaryRector;
use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeFromPropertyTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationBasedOnParentClassMethodRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\BoolReturnTypeFromStrictScalarReturnsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnDirectArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnNewRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictBoolReturnExprRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\Property\AddPropertyTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddPropertyTypeDeclaration;
use Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration;
use RectorLaravel\Rector\Assign\CallOnAppArrayAccessToStandaloneAssignRector;
use RectorLaravel\Set\LaravelLevelSetList;
use RectorLaravel\Set\LaravelSetList;

// rector process app --config=rector-laravel.php

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app',
        //__DIR__ . '/bootstrap',
        //__DIR__ . '/config',
        //__DIR__ . '/public_html',
        //__DIR__ . '/resources',
        //__DIR__ . '/routes',
        //__DIR__ . '/tests',
    ]);

    $rectorConfig->importNames(true);
    $rectorConfig->importShortClasses();

    //$rectorConfig->parameters()->set(Option::REMOVE_UNUSED_IMPORTS, true); // don't import everything, only affected

    $rectorConfig->rules([
        ReturnTypeFromStrictNativeCallRector::class,
        ReturnTypeFromStrictScalarReturnExprRector::class,
    ]);

    //$rectorConfig->rule(\Rector\Php80\Rector\Class_\);

    // register rules to add return type when known
    $rectorConfig->rules([
        //AddParamTypeDeclarationRector::class,
        //AddParamTypeFromPropertyTypeRector::class,
//
        //AddReturnTypeDeclarationBasedOnParentClassMethodRector::class,
//
        //AddVoidReturnTypeWhereNoReturnRector::class,

        //BoolReturnTypeFromStrictScalarReturnsRector::class,
//
        //CallOnAppArrayAccessToStandaloneAssignRector::class,
//
        //ClassPropertyAssignToConstructorPromotionRector::class,
//
        //JsonThrowOnErrorRector::class,
//
        //ReturnTypeFromReturnDirectArrayRector::class,
        //ReturnTypeFromReturnNewRector::class,
        //ReturnTypeFromStrictBoolReturnExprRector::class,
        //ReturnTypeFromStrictNativeCallRector::class,
        //ReturnTypeFromStrictScalarReturnExprRector::class,
//
        //SimplifyConditionsRector::class,
        //SimplifyForeachToArrayFilterRector::class,
        //SimplifyForeachToCoalescingRector::class,
        //SimplifyIfElseToTernaryRector::class,
        //SimplifyUselessVariableRector::class,
        //StringClassNameToClassConstantRector::class,
        //ThrowWithPreviousExceptionRector::class,
    ]);

    /*$rectorConfig->ruleWithConfiguration(RouteActionCallableRector::class, [
        RouteActionCallableRector::NAMESPACE => 'App\Http\Controllers',
    ]);*/
    /*$rectorConfig->ruleWithConfiguration(AddPropertyTypeDeclarationRector::class, [
        new AddPropertyTypeDeclaration('ParentClass', 'name', new StringType()),
    ]);*/
    /*$rectorConfig->ruleWithConfiguration(AddReturnTypeDeclarationRector::class, [
        new AddReturnTypeDeclaration('SomeClass', 'getData', new ArrayType(new MixedType(), new MixedType())),
    ]);*/

    // added this
    $rectorConfig->sets([
        //SetList::TYPE_DECLARATION,
        //SetList::EARLY_RETURN,
        ////SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION,
        //LaravelSetList::LARAVEL_ARRAY_STR_FUNCTION_TO_STATIC_CALL,
        //SetList::CODING_STYLE,
        //SetList::DEAD_CODE,
        //SetList::CODE_QUALITY,
        //LaravelSetList::LARAVEL_CODE_QUALITY,
        //LaravelLevelSetList::UP_TO_LARAVEL_80,
    ]);
};
