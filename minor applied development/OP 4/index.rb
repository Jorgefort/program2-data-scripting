require 'sinatra'

puts "hello, world! this is index.rb"

number = 5
puts "Your number is #[number]"
puts "Number plus 2 is #[number + 2]"

3.times do
    puts "sup"
end

120.times do
    puts "get out blackie"
end

get '/' do
    @message = "dirty filthy yes"
    @current_time = Time.now.strftime("%H:%M:%S")
    time: #{time.now}
    erb :index
end

42.times do
@message = "[number + number]"

    #comment coment test 1 rrqr