<?php

namespace AsyncAws\Rekognition\ValueObject;

/**
 * Indicates whether or not the face has a mustache, and the confidence level in the determination.
 */
final class Mustache
{
    /**
     * Boolean value that indicates whether the face has mustache or not.
     */
    private $Value;

    /**
     * Level of confidence in the determination.
     */
    private $Confidence;

    /**
     * @param array{
     *   Value?: null|bool,
     *   Confidence?: null|float,
     * } $input
     */
    public function __construct(array $input)
    {
        $this->Value = $input['Value'] ?? null;
        $this->Confidence = $input['Confidence'] ?? null;
    }

    public static function create($input): self
    {
        return $input instanceof self ? $input : new self($input);
    }

    public function getConfidence(): ?float
    {
        return $this->Confidence;
    }

    public function getValue(): ?bool
    {
        return $this->Value;
    }
}
