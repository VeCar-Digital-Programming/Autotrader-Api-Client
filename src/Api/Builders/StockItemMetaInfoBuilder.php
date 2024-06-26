<?php

namespace Vecar\AutotraderApiClient\Api\Builders;

use Vecar\AutotraderApiClient\Api\Enums\LifecycleStates;

class StockItemMetaInfoBuilder extends AbstractBuilder
{
    protected $externalStockId;

    protected $externalStockReference;

    protected $lifecycleState;

    /*protected $requiredAttributes = [
        'externalStockId',
        'externalStockReference',
        'lifecycleState',
    ];*/

    public function setExternalStockId($id): StockItemMetaInfoBuilder
    {
        $this->externalStockId = $id;

        return $this;
    }

    public function getExternalStockId(): ?string
    {
        return $this->externalStockId;
    }

    public function setExternalStockReference($reference): StockItemMetaInfoBuilder
    {
        $this->externalStockReference = $reference;

        return $this;
    }

    public function getExternalStockReference(): ?string
    {
        return $this->externalStockReference;
    }

    public function setLifecycleState(string $state): StockItemMetaInfoBuilder
    {
        $states = new LifecycleStates();

        if (!$states->contains($state)) {
            throw new \Exception(
                sprintf('\'%s\' is an invalid state.', $state)
            );
        }

        $this->lifecycleState = $state;

        return $this;
    }

    public function getLifecycleState(): ?string
    {
        return $this->lifecycleState;
    }

    public function toArray(): array
    {
        $this->validate();

        return $this->filterPrepareOutput([
            'externalStockId'        => $this->externalStockId,
            'externalStockReference' => $this->externalStockReference,
            'lifecycleState'         => $this->lifecycleState,
        ]);
    }
}
