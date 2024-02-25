<?php

namespace App\Http\Livewire\Admin\Category;

use App\Helpers\GenerateSlug;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPage extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public mixed $category;

    public string $oldImage;

    #[Validate('required|string|min:3|max:30')]
    public string $name = '';

    #[Validate('nullable|string|min:3|max:120')]
    public string $slug = '';

    #[Validate('nullable|file|max:1024')]
    public mixed $image = '';

    #[Validate('nullable')]
    public bool $isFeatured = false;

    public function mount(string|int $id): void
    {
        $this->category = $category = Category::findOrFail($id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->oldImage = $category->image;
        $this->isFeatured = $category->is_featured;
    }


    public function update(): void
    {
        $validatedData = $this->validate();
        $validatedData['is_featured'] = $this->isFeatured;

        $category = $this->category;

        $validatedData['image'] = $category->image;
        if (!empty($this->image) && $this->image !== $category->image) {
            File::delete($category->image);
            $validatedData['image'] = $this->image->store('upload');
        }

        $newSlug = GenerateSlug::generate($this->name);

        if ($newSlug !== $category->slug) {
            $validatedData['slug'] = $newSlug;
        }

        $this->category->update($validatedData);
        $this->alert('success', trans('Cập nhật danh mục thành công'));

        $this->redirect(IndexPage::class, navigate: true);
    }

    #[On('refreshImage')]
    #[Layout('admin.layouts.app')]
    public function render(): View
    {
        return view('livewire.admin.category.edit-page');
    }
}
