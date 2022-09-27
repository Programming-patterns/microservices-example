build:
	docker-compose -f users.yaml build
	docker-compose -f projects.yaml build
	docker-compose -f rabbitmq.yaml build

up:
	docker-compose -f users.yaml up -d
	docker-compose -f projects.yaml up -d
	docker-compose -f rabbitmq.yaml up -d

start:
	docker-compose -f users.yaml start
	docker-compose -f projects.yaml start
	docker-compose -f rabbitmq.yaml start

down:
	docker-compose -f users.yaml down
	docker-compose -f projects.yaml down
	docker-compose -f rabbitmq.yaml down

stop:
	docker-compose -f users.yaml stop
	docker-compose -f projects.yaml stop
	docker-compose -f rabbitmq.yaml stop
