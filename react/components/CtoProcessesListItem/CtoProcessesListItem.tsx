import React from 'react';
import cn from 'classnames';
import { ProcessType } from 'src/types';
import { Heading2, Text1 } from 'src/ui-kit';

export const CtoProcessesListItem: React.FC<ProcessType> = ({
  title,
  description,
  className = '',
}): JSX.Element => (
  <li
    className={cn(
      'flex flex-col justify-center mx-auto py-14 text-center max-w-full lg:py-[70px] last:pb-0',
      className
    )}
  >
    <Heading2>{title}</Heading2>
    <Text1
      fontSize="text-box-text"
      fontSizeXs="xs:text-box-text"
      fontSizeLg="lg:text-h5"
      className="mt-5 px-1 sm:w-auto lg:px-4"
    >
      {description}
    </Text1>
  </li>
);
