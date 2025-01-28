import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';
import {
  ButtonBracketLeftIcon,
  ButtonBracketRightIcon,
} from 'src/assets/icons';

export const BorderedText: React.FC<TextType> = ({
  title = '',
  className = '',
  children,
}) => (
  <div className="inline-block px-[18px] lg:px-[26px]">
    <div className="flex items-center mx-0 h-[49px] relative border-t-2 border-b-2 border-blue-light lg:h-[82px] lg:border-t-[3px] lg:border-b-[3px]">
      <ButtonBracketLeftIcon className="absolute h-[49px] -left-4 -top-0.5 lg:h-[82px] lg:left-[-19px] lg:top-[-3px]" />
      <em
        className={cn(
          'font-medium not-italic inline-flex items-center leading-10 pb-1.5 lg:pb-3',
          className
        )}
      >
        {title && title}
        {children && children}
      </em>
      <ButtonBracketRightIcon className="absolute h-[49px] -right-4 -top-0.5 lg:h-[82px] lg:right-[-19px] lg:top-[-3px]" />
    </div>
  </div>
);
