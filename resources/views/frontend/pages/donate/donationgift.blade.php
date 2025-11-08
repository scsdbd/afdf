<div class="gift-content col-md-4">
                <h3>Select Gift Items</h3>
                @php
                $datas = App\Models\Gift::all();
                @endphp
                <div class="gift-items">
                    @foreach ($datas as $item)
                        <div class="gift-item" data-price="{{ $item->price }}">
                            <img src="{{ asset($item->image) }}" height="50px" alt="Gift Item">
                            <p>{{ $item->name }} </p>
                            <p>({{ $item->price }} BDT)</p>
                            <div class="quantity-control">
                                <input type="number" name="gift_{{ $item->name }}" min="0" value="{{ $item->quanity }}" class="gift-quantity" style="width: 75px; text-align: center;">
                            </div>
                            <span class="checkmark">✔</span> <!-- Checkmark for selection -->
                        </div>
                    @endforeach
                </div>

            </div>
