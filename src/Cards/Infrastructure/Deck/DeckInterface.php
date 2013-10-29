<?php

namespace Cards\Infrastructure\Deck;

use Cards\Infrastructure\Card\CardInterface;

interface DeckInterface
{
    /**
     * @return array
     */
    public function getCards();

    /**
     * @param \Cards\Infrastructure\Card\CardInterface $card
     * @return $this
     */
    public function addCard(CardInterface $card);

    /**
     * @param array $cards
     * @throw DeckException
     * @return $this
     */
    public function addCards(array $cards);

    /**
     * @param \Cards\Infrastructure\Card\CardInterface $card
     * @throw DeckException
     * @return $this
     */
    public function delCard(CardInterface $card);

    /**
     * @param array $cards
     * @throw DeckException
     * @return $this
     */
    public function delCards(array $cards);

    /**
     * @return $this
     */
    public function shuffle();

    /**
     * @return bool
     */
    public function hasCards();
}
