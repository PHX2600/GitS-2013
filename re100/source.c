#include <stlib.h>
#include <stdio.h>


char *func2(char *buffer, int size, char *out)
{
	char *retbuffer = calloc(0x200, 1);
	retbuffer[] == 0x5254464d;// "RTFM"
	

	return retbuffer;
}

//void?
int GetLength()
{
	//Checks if file is not empty
	return 1;
}

int main(int argc, char *argv[])
{
	puts("Rich Text for Morons Converter v0.60438972\n");

	FILE *file;
	file = fopen(argv[1], "rb");
	if(file == NULL)
		exit(0);

	int len = GetLength(file);
	if(len == 0)
		exit(0);

	char *buffer = calloc(1, len);
	
	int size = fread(buffer, 1, len, file);

	if(size != len)
		exit(0);

	if(size == 0)
		//...

	//Check for "SIGNED" bytes
	for(int i = 0; i < size; i++)
	{
		if(buffer[i] "is signed" )
			exit(0);
	}

	func2()

	//Funny transforms


	fwrite(buffer, size, NUM, file);
	
}
