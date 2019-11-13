#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<time.h>
	int main (){
	int i,x;
		srand((unsigned)time(NULL));
			i=1;
				while(i<=10){
					x=rand()%7;
					printf("\n%1\n",x);
					i++;
				}
				
}
