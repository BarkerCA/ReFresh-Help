json.array!(@tickets) do |ticket|
  json.extract! ticket, :id, :title, :email, :phone, :memo
  json.url ticket_url(ticket, format: :json)
end
