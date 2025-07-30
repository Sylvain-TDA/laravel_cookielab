<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductSorter
{
    protected array $allowedSorts = [
        'name' => [
            'column' => 'name',
            'label' => 'Nom'
        ],
        'price' => [
            'column' => 'price',
            'label' => 'Prix'
        ],
        'category' => [
            'column' => 'category_id',
            'label' => 'Catégorie'
        ],
        'stock' => [
            'column' => 'stock',
            'label' => 'Stock'
        ]
    ];

    protected array $allowedOrders = ['asc', 'desc'];

    protected string $defaultSort = 'name';
    protected string $defaultOrder = 'asc';

    // Transforme les paramètres URL en requête SQL sécurisée
    public function applySort(Request $request, Builder $query): Builder
    {
        $sortBy = $this->validateSort($request->get('sort', $this->defaultSort));
        $sortOrder = $this->validateOrder($request->get('order', $this->defaultOrder));

        $column = $this->allowadSorts[$sortBy]['column'] ?? $this->allowedSorts[$this->defaultSort]['column'];

        return $query->orderBy($column, $sortOrder);
    }

    // Détermine quel critère de tri est actuellement actif
    public function getCurrentSort(Request $request): string
    {
        return $this->validateSort($request->get('sort', $this->defaultSort));
    }

    // Détermine l'ordre de tri actuel (croissant/décroissant)
    public function getCurrentOrder(Request $request): string
    {
        return $this->validateOrder($request->get('order', $this->defaultOrder));
    }

    // Génère automatiquement les options du menu déroulant
    public function getSortOptions(): array
    {
        // Extrait les labels des options de tri et les retourne sous forme de tableau
        return collect($this->allowedSorts)->map(fn($sort) => $sort['label'])->toArray();
    }

    // Labels français pour l'ordre de tri
    public function getOrderOptions(): array
    {
        return [
            'asc' => 'Croissant',
            'desc' => 'Décroissant'
        ];
    }

    // Construit des URLs de tri en préservant les autres filtres
    public function getSortUrl(string $sortBy, string $order, array $additionalParams = []): string
    {
        // array_merge fusionne les tableaux, les paramètres de tri écrasent les existants
        $params = array_merge($additionalParams, [
            'sort' => $sortBy,
            'order' => $order
        ]);
        // Récupère l'URL actuelle SANS les paramètres GET, transforme les paramètres en chaîne de requête URL-encodée puis concatène
        // Pour créer l'URL complète de tri
        return request()->url() . '?' . http_build_query($params);
    }

    // Logique intelligente pour les boutons de tri (si clic sur la même colonne, inverse l'ordre)
    public function getToggleOrderUrl(string $currentSort, string $currentOrder, string $newSort): string
    {
        // Si on clique sur la même colonne, inverse l'ordre
        if ($currentSort === $newSort) {
            $newOrder = $currentOrder === 'asc' ? 'desc' : 'asc';
        } else {
            $newOrder = 'asc';
        }
        // Retourne l'URL de tri avec les nouveaux paramètres
        return $this->getSortUrl($newSort, $newOrder, request()->except(['sort', 'order', 'page']));
    }

    // Sécurité - empêche les injections SQL
    protected function validateSort(string $sort): string
    {
        return array_key_exists($sort, $this->allowedSorts) ? $sort : $this->defaultSort;
    }

    // Validation de l'ordre de tri
    protected function validateOrder(string $order): string
    {
        return in_array($order, $this->allowedOrders) ? $order : $this->defaultOrder;
    }

    // Détermine si un critère est actuellement sélectionné
    public function isCurrentSort(string $sort, Request $request): bool
    {
        return $this->getCurrentSort($request) === $sort;
    }

    // Affiche une flèche indiquant le sens du tri
    public function getSortIcon(string $sort, Request $request): string
    {
        if (!$this->isCurrentSort($sort, $request)) {
            return '';
        }

        return $this->getCurrentOrder($request) === 'asc' ? '↑' : '↓';
    }
}
