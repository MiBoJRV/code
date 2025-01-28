import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const ButtonText: React.FC<TextType> = ({
  title = '',
  className = '',
}) => <span className={cn('font-medium', className)}>{title}</span>;
