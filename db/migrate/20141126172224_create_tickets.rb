class CreateTickets < ActiveRecord::Migration
  def change
    create_table :tickets do |t|
      t.string :title
      t.string :email
      t.string :phone
      t.text :memo

      t.timestamps
    end
  end
end
