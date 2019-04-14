<?php

/*
 * This file is part of the simhashphp project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SimHash\Hasher;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 *
 * @internal
 */
class Size256Hasher implements SizeHasherInterface
{
    use AlgorithmDetectorHasherTrait;

    public function getSize(): int
    {
        return 256;
    }

    public function getPotentialAlgorithms(): array
    {
        return ['sha256', 'ripemd256', 'snefru', 'gost', 'haval256,5'];
    }
}